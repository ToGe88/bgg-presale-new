<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <?= css('assets/css/main.css') ?>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <?= js('./assets/js/jquery.js') ?>
</head>
<body>
