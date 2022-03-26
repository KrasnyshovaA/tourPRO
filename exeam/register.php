<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets\style\css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exeams</title>
  </head>
  <body>
  <form action="vendor\signup.php" method="post">
      <label>ФИО</label>
      <input type="text" name="full_name" placeholder="Введите полное имя">
      <label>Логин</label>
      <input type="text" name="login" placeholder="Введите логин">
      <label>Почта</label>
      <input type="email" name="email" placeholder="Введите электроную почту">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите пароль">
      <label>Подтверждение пароля</label>
      <input type="password" name="password_confirm" placeholder="Введите пароль">
      <button type="submit">Регистрация</button>
      <p>
          Есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
      </p>

    </form>
    </body>
  </html>
