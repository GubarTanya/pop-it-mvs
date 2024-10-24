<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
    <link rel="stylesheet" href="public/style/style.css">
</head>
<body>
<header>
   <nav class="navigation">
       <a style="margin-top: 30px;margin-left: 100px;" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php
       if (!app()->auth::check()):
           ?>
           <a style="margin-top: 30px;margin-left: 150px;" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
           <a style="margin-top: 30px;margin-left: 170px;" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
       <?php
       else:
           ?>
           <a style="top: 30px;left: 400px;" href="<?= app()->route->getUrl('/add') ?>">Добавление</a>
           <a style="top: 30px;left: 600px;" href="<?= app()->route->getUrl('/show') ?>">Просмотр</a>
           <a style="top: 30px;left: 1700px;" href="<?= app()->route->getUrl('/logout') ?>"><?= app()->auth::user()->name ?> Выход</a>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
