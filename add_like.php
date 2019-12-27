<?
    require("static/scripts/posts.php");
    require("static/scripts/auth.php");

    if(check_login())
    {
        $post_id = $_GET["id"];
        echo like_post($post_id);
        
    }
    else
    {
        echo "False";
    }
?>