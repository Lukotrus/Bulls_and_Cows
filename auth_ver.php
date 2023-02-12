<?php
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password."fjasfsfaisfoasfo124214");

$mysql = new mysqli ("localhost:3306", "u4251519_root", "8NsJS2W56o2M", "u4251519_users");
$result = $mysql->query("SELECT * FROM `account` WHERE `login`='$login' AND `password`='$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo "no such user found";
    exit();
}

setcookie('user', $user['name'], time() +3600, "/");

header('Location: /Bulls_and_Cows.php');
?>