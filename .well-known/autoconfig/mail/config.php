<?php

header ('Content-Type: application/xml');

$mailboxname = str_replace ("@", "_", $_GET["emailaddress"]);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<clientConfig version="1.1">
  <emailProvider id="frob.nl">
    <domain>frob.nl</domain>
    <displayName>frob.nl</displayName>
    <displayShortName>frob.nl</displayShortName>
    <incomingServer type="imap">
      <hostname>mail.mxes.net</hostname>
      <port>993</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username><?php echo ("$mailboxname"); ?></username>
    </incomingServer>
    <incomingServer type="imap">
      <hostname>mail.mxes.net</hostname>
      <port>143</port>
      <socketType>STARTTLS</socketType>
      <authentication>password-cleartext</authentication>
      <username><?php echo ("$mailboxname"); ?></username>
    </incomingServer>
    <outgoingServer type="smtp">
      <hostname>smtp.mxes.net</hostname>
      <port>465</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username><?php echo ("$mailboxname"); ?></username>
    </outgoingServer>
    <outgoingServer type="smtp">
      <hostname>smtp.mxes.net</hostname>
      <port>587</port>
      <socketType>STARTTLS</socketType>
      <authentication>password-cleartext</authentication>
      <username><?php echo ("$mailboxname"); ?></username>
    </outgoingServer>
    <documentation url="http://www.tuffmail.com/client-config.php">
      <descr lang="en">Tuffmail client configuration page</descr>
    </documentation>
    <documentation url="http://www.tuffmail.com/ports.php">
      <descr lang="en">Tuffmail server settings page</descr>
    </documentation>
  </emailProvider>
</clientConfig>
