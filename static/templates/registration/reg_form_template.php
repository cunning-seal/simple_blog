<html lang="en">
<head>
    <? require('static/templates/base/head.php'); ?>
    <link rel="stylesheet" href="static/css/registration/reg_form.css">    

</head>
    <body>
        <?require("static/templates/base/header.php");?>

        <div id="content" class="container">
        <div class="row">
            <?
                if($result != "")
                {
                    if ($result != "Учетная запись успешно создана!"){
                    ?>
                        <div class="alert alert-danger">
                            <strong>Ошибка!</strong> <?echo $result;?>
                        </div>
                    <?
                    }
                    else {
                        ?>
                        <div class="alert alert-success">
                            <strong>Поздравляем!</strong> <?echo $result;?>
                        </div>
                        <?
                    }
                }
            ?>
            </div>
            <?require("reg_form.html");?>
        </div>

        <?require("static/templates/base/footer.html");?>
        <?require("static/templates/base/b_scripts.html");?>

        <script>
        $("document").ready(function(){
            $(".navbar-nav #second").addClass('active');
        })
    </script>

    </body>
</html>