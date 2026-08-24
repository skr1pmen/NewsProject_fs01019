<?php

/** @var $content */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/app/web/styles/style.css">
    <link rel="stylesheet" href="/app/web/styles/user.css">

    <title><?= $this->title ?></title>
</head>
<body>
<div class="container">
    <?= $content ?>
</div>
</body>
</html>
