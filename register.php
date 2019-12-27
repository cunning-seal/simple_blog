<?php

function register($login, $password, $username, $agreement){

    if(!$login)
    {
        return "Введите логин";
    }

    if(!$password)
    {
        return "Введите пароль";
    }

    if(!$username)
    {
        return "Введите никнейм";
    }

    // if(!$agreement)
    // {
    //     return "Примите условия на обработку личных данных";
    // }

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
    // if(!$agreement)
    // {
    //     return "Примите условия на обработку личных данных";
    // }

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
    $login = $_POST['login'] ?? false;
    $password = $_POST['password'] ?? false;
    $username = $_POST['username'] ?? false;
    $agreement = $_POST['agreement'] ?? false;

    $result = register($login, $password, $username, $agreement);

        require("static/templates/registration/reg_form_template.php");
    
}
else {
    $result = "";
    require('static/templates/registration/reg_form_template.php');
}
?>

