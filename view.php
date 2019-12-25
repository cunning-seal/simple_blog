<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
    <link rel="stylesheet" href="static/css/posts/post.css">
</head>
<body>
    <?require("static/templates/base/header.php");?>

    <div id="content" class="container">
        <?
        if(check_login())
        {
            ?>
                <div id="button_create_post" class="container">
                    <p>Добавить пост</p>
                </div>
            <?
            
            require('static/scripts/posts.php');
            $posts_data = show_user_posts();
            if (!empty($posts_data))
            {
                 foreach($posts_data as $post)
                 {
                    require("static/templates/posts/post.php");
                 
                 }
            }
            else
            {
                ?>
                    <p>У вас нет постов</p>
                <?
            }
        }
        else{
            ?>
            <p>Вы не авторизованы!</p>
            <?
        }
        ?>
    </div>

    <? require("static/templates/base/footer.html"); ?>
    <? require("static/templates/base/b_scripts.html"); ?>
</body>



</html>