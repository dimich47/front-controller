<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
</head>
<body>
<nav>
    <a href="/">Главная страница</a>
    <a href="/books">Книги</a>
    <a href="/info">Информация</a>
    <a href="/shop">Магазин</a>
</nav>
<div>
<?php include_once $content; ?>
</div>
</body>
</html>
