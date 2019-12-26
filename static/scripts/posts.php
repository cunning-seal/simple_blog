<?php 

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
            $sql = "select posts.id, posts.title, posts.text, posts.created, users.username, posts.likes from posts inner join users on posts.FK_user_id = users.id where posts.FK_user_id=$user_id order by posts.created DESC";
            
            if ($posts_result = $mysqli->query($sql))
            { 
                return $posts_result->fetch_all(MYSQLI_ASSOC);
            }
            else {
                return array();
            }
            

        }
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
    $username = $_SESSION['username'];
    if ($username){
        $sql = "select posts.id, posts.title, posts.text, posts.created, users.username, posts.likes from posts inner join users on posts.FK_user_id = users.id where users.username='$username' and posts.id='$post_id'";
        if ($result = $mysqli->query($sql))
        {
            $post = $result->fetch_all(MYSQLI_ASSOC);
            if (!empty($post))
            {
                $sql = "delete from posts where id=$post_id";
                if($result=$mysqli->query($sql))
                {
                    return "ok";
                }
                else {
                    return "not ok";
                }
            }
        }
        //....
    }
}
?>