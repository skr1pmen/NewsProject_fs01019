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
    <link rel="stylesheet" href="/app/web/styles/admin.css">
    <link rel="stylesheet" href="/app/web/styles/user.css">

    <title><?= $this->title ?></title>
</head>
<body>
<div class="container">
    <header>
        <a href="/" class="logo"><span>News</span>Portal</a>
        <form action="" method="get">
            <label><input type="search" name="search" placeholder="Поиск"></label>
            <button type="submit" class="btn fas fa-search"></button>
        </form>
        <?php if (!empty($_SESSION['user'])): ?>
            <a href="/user/profile" class="btn"><?= $_SESSION['user']['login'] ?></a>
        <?php else: ?>
            <a href="/user/login" class="btn">Войти <i class="fas fa-arrow-right-to-bracket"></i></a>
        <?php endif; ?>
    </header>
    <?= $content ?>
</div>
</body>
</html>
