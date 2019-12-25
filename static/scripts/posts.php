<?php 
function create_post($text, $header)
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $username = $_SESSION['login'];
    if ($username){
        $sql = "select * from users where login='$username'";
        if ($result = $mysqli->query($sql))
        {
            $user_id = $result->fetch_assoc()['id'];
            $sql = "insert * from posts where FK_user_id='$user_id'";
        }
        //....
    }
    

}

function show_posts()
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $sql = "select * from posts";
    if ($result = $mysqli->query($sql))
    {
        if ($posts_result = $mysqli->query($sql))
        { 
            return $posts_result->fetch_all(MYSQLI_ASSOC);
        }
        else {
            return array();
        }   
    }
}

function show_user_posts()
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $username = $_SESSION['username'];
    if ($username){
        $sql = "select * from users where username='$username'";
        if ($result = $mysqli->query($sql))
        {

            $user_id = $result->fetch_assoc()['id'];
            $sql = "select * from posts where FK_user_id='$user_id'";
            
            if ($posts_result = $mysqli->query($sql))
            { 
                return $posts_result->fetch_all(MYSQLI_ASSOC);
            }
            else {
                return array();
            }
            

        }
        //....
    }

}


function like_post($post_id)
{
    $mysqli = new mysqli("localhost", "root", "", "blog_db");
    $username = $_SESSION['login'];
    if ($username){
        $sql = "select * from users where login='$username'";
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
    $username = $_SESSION['login'];
    if ($username){
        $sql = "select * from users where login='$username'";
        if ($result = $mysqli->query($sql))
        {
            //....
        }
        //....
    }
}
?>