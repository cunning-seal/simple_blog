<?php
session_start();

function get_auth_data($login, $password){
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    if ($mysqli->connect_errno) {
        return ["result" => false,
                "text" => "Не удалось подключиться к MySQL: " . $mysqli->connect_error];
    }
    $login = $mysqli->real_escape_string($login);
    $sql = "select * from users where login='$login'";
    $res = $mysqli->query($sql);
    if (!$res) {
        return ["result" => false,
                "text" => "Не удалось выполнить запрос: (" . $mysqli->errno . ") " . $mysqli->error];
    }
    
    $row = mysqli_fetch_assoc($res);
    $ps = $row['password'];
    $id = $row['id'];
    $username = $row['username'];

    if (md5(md5($password)) === $ps)
    {
        return ["result" => true,
                "text" => "Успешный вход в учетную запись",
                "id" => $id,
                "username" => $username];
    }
    else {
        return ["result" => false,
                "text" => "Неправильный логин или пароль"];
    }
    


}

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

function login($login, $password)
{

    $auth_data = get_auth_data($login, $password);
    $result = $auth_data['text'];
    $b_result = $auth_data['result'];

    if ($auth_data['result']){

    $mysqli = new mysqli("localhost", "root", "", "blog_db");

    $hash = md5(generateCode(10));
    $id = $auth_data['id'];
    $sql = "UPDATE users SET hash='".$hash."' WHERE id=$id;";
    
    $mysqli->query($sql);
    $_SESSION['id'] = $auth_data['id'];
    $_SESSION['username'] = $auth_data['username'];
    $_SESSION['hash'] = $hash;
    return true;
    }
    else {
        return false;
    }
}


function check_login()
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    if ($mysqli->connect_errno) {
        return false;
    }

    $hash = $_SESSION['hash'] ?? "";
    $id = $_SESSION['id'] ?? "";
    $user = $_SESSION['username'] ?? "";

    if ($hash=="" or $id=="")
    {
        return false;
    }

    $sql = "select * from users where id=$id and hash='".$hash."'";
    $res = $mysqli->query($sql);
    
    if (empty($res)) {
        return false;
    }
    else {
        return true;
    }
}

function close()
{
    try{
        $_SESSION = array(); 
        // setcookie("id", time() - 3600);
        // setcookie("username", time() - 3600);
        // setcookie("hash", time() - 3600);
        session_destroy();
    } catch (Exception $e){

    }
}
?>