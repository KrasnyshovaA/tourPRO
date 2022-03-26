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
    <div class="logo">
    <img src="https://www.creativefabrica.com/wp-content/uploads/2018/10/Sea-coconut-tree-logo-by-DEEMKA-STUDIO-3.jpg" width="500" height="440">
  </div>
<div class="container">
  <p>Добро Пожаловать!</p>
</div>
<form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
    </p>
  </form>
  </body>
</html>
