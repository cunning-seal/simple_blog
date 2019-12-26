<?

    require('static/scripts/auth.php');
    require('static/scripts/posts.php');

    if(check_login())
    {
        $r = delete_post($_GET['id']);
        header("Location: http://192.168.64.2/site/view.php");
    }

?>