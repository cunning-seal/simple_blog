<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
    <link rel="stylesheet" href="static/css/posts/post.css">
</head>
<body>
    <?require("static/templates/base/header.php");?>

    
    <div id="content" class="container">
        <?
        $enabled = False;
        if(check_login())
        {
            ?>
            <p>Приветствую, <?echo $_SESSION['username'];?></p>
            <?
            $enabled = True;
        }

        require('static/scripts/posts.php');
        $posts_data = show_posts();
        

        if (!empty($posts_data))
        {
            ?><div id="posts_content"><?
            
             foreach($posts_data as $post)
             {
                require("static/templates/posts/main_page_posts.php");
             }

        }

        ?>
    </div>

    <? require("static/templates/base/footer.html"); ?>
    <? require("static/templates/base/b_scripts.html"); ?>
    
    <script src="static/js/likes.js"></script>

    <script>
        $("document").ready(function(){
            $(".navbar-nav #first").addClass('active');
        })
    </script>
</body>
</html>