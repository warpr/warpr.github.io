<?php

header ('Content-Type: application/xml');

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<clientConfig version="1.1">
  <emailProvider id="MessagingEngine">
    <domain>frob.nl</domain>
    <displayName>frob.nl</displayName>
    <displayShortName>frob.nl</displayShortName>
    <incomingServer type="imap">
      <hostname>mail.messagingengine.com</hostname>
      <port>993</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username>%EMAILADDRESS%</username>
    </incomingServer>
    <incomingServer type="pop3">
      <hostname>mail.messagingengine.com</hostname>
      <port>995</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username>%EMAILADDRESS%</username>
    </incomingServer>
    <outgoingServer type="smtp">
      <hostname>mail.messagingengine.com</hostname>
      <port>465</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username>%EMAILADDRESS%</username>
    </outgoingServer>
    <instruction url="https://www.fastmail.fm/help/technical/servernamesandports.html">
      <descr lang="en">Server Names and Ports</descr>
    </instruction>
    <instruction url="https://www.fastmail.fm/help/clients/thunderbird.html">
      <descr lang="en">Using FastMail with Mozilla Thunderbird</descr>
    </instruction>
  </emailProvider>
</clientConfig>
