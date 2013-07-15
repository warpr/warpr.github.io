#!/usr/bin/env python

import json
import sys

ref = "cv"

with open (ref + '.html', 'rb') as f:
    html = f.read ()

data = {
    'user_credentials': 'MjJHrPM1Cm371CJ3K1XK',
    'doc': {
        'name': ref + '.pdf',
        'document_type': 'pdf',
        'document_content': html
        }
}

with open (ref + '.json', 'wb') as f:
    f.write (json.dumps (data, indent=4))

print "Use the following command to convert:"
print ""
print 'curl -H "Content-Type:application/json" -d @' + ref + '.json https://docraptor.com/docs > ' + ref + '.pdf'
print ""
