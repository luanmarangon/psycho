<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $head; ?>
  <link rel="stylesheet" href="<?= theme("/assets/style.css", CONF_VIEW_ADMIN); ?>" />
  <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png", CONF_VIEW_ADMIN); ?>" />
</head>

<body>
  

  <?= $v->section("content"); ?>

  <script src="<?= theme("/assets/scripts.js", CONF_VIEW_ADMIN); ?>"></script>
  <?= $v->section("scripts"); ?>
</body>

</html>