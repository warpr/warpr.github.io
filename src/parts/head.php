<head>
  <title>Kuno Woudt, <?= $title ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="application/ld+json">
  <?php include(dirname(__FILE__)."/../../me.jsonld"); ?>
  </script>


<?php if (getenv("FROB") == "static"): ?>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css">
  <link rel="stylesheet" href="/style.css" />
<?php else: ?>
  <meta http-equiv="refresh" content="20" />
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet/less" href="style.less" />
<?php endif; ?>

</head>
