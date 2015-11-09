# -*- mode: shell-script -*-

FROM phusion/baseimage:0.9.17

EXPOSE 80
EXPOSE 443

CMD ["/sbin/my_init"]

RUN apt-get -y update && apt-get -y install add-apt-key # 2015-11-08

# nginx repository and GPG key
RUN add-apt-key --keyserver pool.sks-keyservers.net 573BFD6B3D8FBC641079A6ABABF5BD827BD9BF62

COPY nginx/sources.list     /etc/apt/sources.list.d/nginx.list

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install build-essential curl git php5-cli php5-fpm wget \
    python-cssselect python-html5lib python-lxml python-iso8601 python-tz \
    libpython-dev nginx python-virtualenv python-pip php5-json php5-readline

RUN curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
RUN sudo apt-get install -y nodejs

COPY ssh/gitlab.deployment.key /root/.ssh/id_rsa
COPY ssh/gitlab.deployment.pub /root/.ssh/id_rsa.pub
COPY ssh/known_hosts /root/.ssh/known_hosts

WORKDIR /var/www/

RUN git clone git@gitlab.com:kuno/frob.nl.git

WORKDIR /var/www/frob.nl

RUN printf "\ndaemon off;\n" >> /etc/nginx/nginx.conf # KXOUEOE
RUN rm /etc/nginx/conf.d/default.conf

COPY ssl/frob.nl.2011.key          /etc/ssl/
COPY ssl/frob.nl.2014.bundle.crt   /etc/ssl/
COPY nginx/frob.nl.conf            /etc/nginx/conf.d/
COPY nginx/service.sh              /etc/service/nginx/run

RUN npm install

RUN bin/step1
RUN bin/step2
RUN bin/step3

RUN echo "47  *  * * *         /var/www/frob.nl/bin/update" > /var/spool/cron/crontabs/root

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


