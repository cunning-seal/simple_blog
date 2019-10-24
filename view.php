<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
</head>
<body>
    <?require("static/templates/base/header.php");?>

    <div id="content" class="container">
        <?
        if(check_login())
        {
            ?>
            <p>Посты за последние 10 часов</p>
            
            <?require("static/templates/posts/post.php");
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