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
            <p>Приветствую, <?echo $_SESSION['username'];?></p>
            <?
        }

        require('static/scripts/posts.php');
        $data = show_posts();

        ?>
    </div>

    <? require("static/templates/base/footer.html"); ?>
    <? require("static/templates/base/b_scripts.html"); ?>

    <script>
        $("document").ready(function(){
            $(".navbar-nav #first").addClass('active');
        })
    </script>
</body>
</html>