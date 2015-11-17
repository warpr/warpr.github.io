/*

  This file is part of Hello! Internet.
  Copyright (C) 2013  Kuno Woudt <kuno@frob.nl>

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

var http = require ('http');

/* no request within threshold milliseconds and we think the machine is offline. */
var threshold = 320 * 1000;
var database = {};

var online = function (data) {
    var mydata = JSON.parse (JSON.stringify (data));

    for (var key in mydata) {
        if (mydata.hasOwnProperty (key))
        {
            var then = mydata[key]["timestamp"];
            var now = +(new Date ());
            mydata[key]["offline"] = ((now - then) > threshold);
            delete mydata[key]["timestamp"];
        }
    }

    return mydata;
};

var get_client_ip = function (request) {
    return (request.headers['x-forwarded-for']
            ? request.headers['x-forwarded-for'].split (',')[0]
            : request.connection.remoteAddress)
};

var responder = function (response, data) {
    response.writeHead (200, {
        'Content-Type': 'application/json',
    });
    response.end (JSON.stringify (data, null, 4));
};

var listener = function (request, response) {
    if (request.method == "POST")
    {
        var body = "";
        request.on('data', function(chunk) { body += chunk; });
        request.on('end', function() {
            update = JSON.parse (body);

            database[update["host"]] = {
                "user": update["user"],
                "ipv6": update["ipv6"],
                "lan-ipv4": update["lan-ipv4"],
                "wan-ipv4": get_client_ip (request),
                "timestamp": +(new Date ()),
                "last-seen": (new Date ()).toISOString ()
            };

            responder (response, online (database));
        });
    }
    else
    {
        responder (response, online (database));
    }
};


var port = process.argv[2] ? process.argv[2] : 18918;

exports.app = function (port) {
    console.log ('Server running at http://127.0.0.1:' + port.toString () + '/');
    http.createServer (listener).listen (port, "127.0.0.1");
}

exports.app(port);


