<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
    <link rel="stylesheet" href="static/css/login/login_form.css">    
</head>
    <body>

        <?require("static/templates/base/header.php");?>

        <div id="content" class="container">
            <div class="row">
            <?
                if($result != "")
                {
                    ?>
                        <div class="alert alert-danger">
                            <strong>Ошибка!</strong> Неправильный логин и/или пароль
                        </div>
                    <?
                }
            ?>
            </div>
            <div class="row">
            <?require("login_form.html");?>
            </div>
            <!-- <div class="row">
            <div  id="form_result"><p><?echo $result;?></p></div>
            </div> -->
           
            
        </div>

        <?require("static/templates/base/footer.html");?>
        <?require("static/templates/base/b_scripts.html");?>
        <script>
        $("document").ready(function(){
            $(".navbar-nav #third").addClass('active');
        })
    </script>

    </body>
</html>