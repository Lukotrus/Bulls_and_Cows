<?php

  $login = $_POST['login'];
  $password = $_POST['password'];
  $name = $_POST['name'];



   if(mb_strlen($login) < 4 || mb_strlen($login) > 90) {
    echo "Invalid login length";
    exit();
   } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Invalid name length";
    exit();
   } else if (mb_strlen($password) < 2 || mb_strlen($password) > 10) {
    echo "Invalid password length (2-6 characters)";
    exit();
   }

   $password = md5($password."fjasfsfaisfoasfo124214");

   $conn = mysqli_connect("localhost", "u4251519_root", "8NsJS2W56o2M", "u4251519_users");
   $query = mysqli_query($conn, "INSERT INTO `account` (`login`,`password`, `name`) VALUES ('$login','$password', '$name')");
  

header('Location: /registration.php');
?>