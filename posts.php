<?php 
function create_post($text, $header)
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $login = $_SESSION['login'];
    if ($login){
        $sql = "select * from users where login='$login'";
        if ($result = $mysqli->query($sql))
        {
            //....
        }
        //....
    }
    

}

function show_posts()
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $login = $_SESSION['login'];
    if ($login){
        $sql = "select * from users where login='$login'";
        if ($result = $mysqli->query($sql))
        {
            //....
        }
        //....
    }
}

function like_post($post_id)
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $login = $_SESSION['login'];
    if ($login){
        $sql = "select * from users where login='$login'";
        if ($result = $mysqli->query($sql))
        {
            //....
        }
        //....
    }
}

function delete_post($post_id)
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $login = $_SESSION['login'];
    if ($login){
        $sql = "select * from users where login='$login'";
        if ($result = $mysqli->query($sql))
        {
            //....
        }
        //....
    }
}
?>