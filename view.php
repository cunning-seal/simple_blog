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
                <button type="button" class="btn btn-primary" id="btn-create-post">Опубликовать пост</button>
            <?
            
            require('static/scripts/posts.php');
            $posts_data = show_user_posts();

            if (!empty($posts_data))
            {
                ?><div id="posts_content"><?
                
                 foreach($posts_data as $post)
                 {
                    require("static/templates/posts/users_posts.php");
                 }

            }
            else
            {
                ?>
                    <p>У вас нет постов</p>
                <?
            }
            ?> </div><?
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
    <script>
        $("document").ready(function(){
            $(".navbar-nav #second").addClass('active');
        })
    </script>
</body>



</html>