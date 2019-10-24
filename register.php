<?php

function register($login, $password, $username){

    $mysqli = new mysqli("localhost", "root", "", "blog_db");
        
    if ($mysqli->connect_errno) {
        return "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
    }

    if ($result = $mysqli->query("select * from users where login='$login'")) {
    
        if($result->num_rows != 0)
        {
            return "Пользователь с таким логином уже существует";
        }
        
        /* очищаем результирующий набор */
        $result->close();
    }

    $password_hash = md5(md5(trim($password)));

    $sql = "insert into users (login, password, username) values ('$login', '$password_hash', '$username')";
    $res = $mysqli->query($sql);

    if (!$res) {
        return "Не удалось выполнить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    else
    {
        return "Учетная запись успешно создана!";
    }
}


if (!empty($_POST))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $agreement = $_POST['agreement'];

    $result = register($login, $password, $username);

    require("static/templates/registration/reg_response_template.php");
}
else {
    require('static/templates/registration/reg_form_template.php');
}
?>

