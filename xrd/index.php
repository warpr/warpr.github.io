<?php

if ($_GET["uri"] != "acct:kuno@frob.nl" && $_GET["uri"] != "acct:warp@frob.nl")
{
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
}
else
{
  $subject = $_GET["uri"];
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<XRD xmlns="http://docs.oasis-open.org/ns/xri/xrd-1.0">
    <Subject><?php echo $subject; ?></Subject>
    <Alias>https://micro.frob.nl/</Alias>
    <Link rel="http://webfinger.net/rel/profile-page" type="text/html" href="https://micro.frob.nl/"></Link>
    <Link rel="describedby" type="application/rdf+xml" href="https://micro.frob.nl/foaf"></Link>
    <Link rel="salmon" href="https://micro.frob.nl/main/salmon/user/1"></Link>
    <Link rel="http://salmon-protocol.org/ns/salmon-replies" href="https://micro.frob.nl/main/salmon/user/1"></Link>
    <Link rel="http://salmon-protocol.org/ns/salmon-mention" href="https://micro.frob.nl/main/salmon/user/1"></Link>
    <Link rel="http://schemas.google.com/g/2010#updates-from" href="https://micro.frob.nl/api/statuses/user_timeline/1.atom" type="application/atom+xml"></Link>
    <Link rel="http://ostatus.org/schema/1.0/subscribe" template="https://micro.frob.nl/main/ostatussub?profile={uri}"></Link>
    <Link rel="http://apinamespace.org/atom" type="application/atomsvc+xml" href="https://micro.frob.nl/api/statusnet/app/service/warp.xml">
        <Property type="http://apinamespace.org/atom/username">warp</Property>
    </Link>
    <Link rel="http://apinamespace.org/twitter" href="https://micro.frob.nl/api/">
        <Property type="http://apinamespace.org/twitter/username">byld</Property>
    </Link>
</XRD>
