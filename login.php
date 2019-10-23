<?php
function get_auth_data($login, $password){
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
    }
    // $sql = "SELECT * FROM users where login='$login' and password='$password'";
    $login = $mysqli->real_escape_string($login);
    $sql = "select * from users where login='$login'";
    $res = $mysqli->query($sql);
    if (!$res) {
        echo "Не удалось выполнить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    $row = mysqli_fetch_assoc($res);
    $ps = $row['password'];

    if (md5(md5($password)) === $ps)
    {
        echo "GUCHI GANG";
    }
    else {
        echo "HREN TEBE";
    }
    


}

$login = "q";
$passw = "qadmin";
get_auth_data($login, $passw);
?>