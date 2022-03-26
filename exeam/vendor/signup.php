<?php
session_start();
 require_once 'connect.php';

 $full_name= $_POST['full_name'];
 $login= $_POST['login'];
 $email= $_POST['email'];
 $password= $_POST['password'];
 $password_confirm= $_POST ['password_confirm'];

 if ($password === $password_confirm){
 mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");
 header('Location:../index.php');
 }else{
   die('Пароли не совпадают');
 }

  ?>
