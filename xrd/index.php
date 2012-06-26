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
    <Link rel="http://webfinger.net/rel/profile-page" type="text/html" href="http://320x200.org/profile/"></Link>
    <Link rel="http://schemas.google.com/g/2010#updates-from" href="http://320x200.org/pixie.atom" type="application/atom+xml"></Link>
</XRD>
