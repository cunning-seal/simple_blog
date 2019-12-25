<?php
require_once('static/scripts/auth.php');

function create_post($title, $text, $username){

    $mysqli = new mysqli("localhost", "root", "", "blog_db");

    // $username = $_SESSION['username'];
    $sql = "select * from users where username='$username'";

    if($res = $mysqli->query($sql))
    {
        $user_id = $res->fetch_all(MYSQLI_ASSOC)[0]['id'];
        $sql = "insert into posts (FK_user_id, title, text) values ($user_id,'$title', '$text')";
        $res = $mysqli->query($sql);
        if($res)
        {
            return "Пост опубликован";
        }
        else {
            printf($sql);
            return "Не удалось выполнить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
    else 
    {
        return "Пользователь не найден";
    }
}


if (!empty($_POST))
{
    $title = $_POST['title'];
    $text = $_POST['text'];
    $username = $_SESSION['username'];


    $result = create_post($title, $text, $username);
    printf($result);
    header("Location: view.php");
}
else {

    

    if(check_login())
    {
        require('static/templates/posts/post_create_form.php');
    }
    else 
    {
        
    }
    
}
?>