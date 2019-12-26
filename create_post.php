<?php
require_once('static/scripts/auth.php');

if (!empty($_POST))
{
    $title = $_POST['title'];
    $text = $_POST['text'];
    $username = $_SESSION['username'];

    require("static/scripts/posts.php");

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