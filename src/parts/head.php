<head>
  <title>Kuno Woudt, <?= $title ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if (getenv("FROB") == "static"): ?>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css">
  <link rel="stylesheet" href="/style.css" />
<?php else: ?>
  <meta http-equiv="refresh" content="10" />
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet/less" href="style.less" />
<?php endif; ?>

</head>
