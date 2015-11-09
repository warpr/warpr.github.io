#!/bin/sh

YEAR=2013
DOMAIN=micro.frob.nl

echo "For gandi, please see http://wiki.gandi.net/en/ssl/csr"

openssl req -config csr.conf -newkey rsa:2048 -keyout $DOMAIN.$YEAR.key -out $DOMAIN.$YEAR.csr

