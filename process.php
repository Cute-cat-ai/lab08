<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$correct_username = 'Bill';
$correct_password = '104511108';

if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    echo "登录失败，请检查用户名或密码。<a href='login.php'>返回</a>";
}
?>

