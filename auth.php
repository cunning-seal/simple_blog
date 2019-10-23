<?php
// if(!defined("IN_ADMIN")) die;

session_start();

$login = "admin";
$passw = "admin";
if(!empty($_POST['enter']))
{
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['passw'] = $_POST['passw'];
        // echo "<p>Hello, logged in user</p>";
}

if(empty($_SESSION['login']) or
   $login != $_SESSION['login'] or
   $passw != $_SESSION['passw']    ){
?>

<a href="index.html">Вернуться на главную</a>
<form action="" method="post">
    Логин <input type="text" name="login">
    Пароль <input type="password" name="passw">
    <input type=hidden name=enter value=yes>
    <input class=button type=submit value="Вход">
</form>

<?}?>