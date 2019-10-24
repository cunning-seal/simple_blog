<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
    <link rel="stylesheet" href="static/css/login/login_form.css">    
</head>
    <body>

        <?require("static/templates/base/header.php");?>

        <div id="content" class="container">
            <?require("login_form.html");?>
            <div  id="form_result"><p><?echo $result;?></p></div>
        </div>

        <?require("static/templates/base/footer.html");?>
        <?require("static/templates/base/b_scripts.html");?>


    </body>
</html>