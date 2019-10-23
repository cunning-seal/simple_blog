<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/base.css">
    <link rel="stylesheet" href="static/css/reg_form.css">    
    <title>Document</title>
</head>
<body>
    <div id="header" class="container">
        <div class="row">
                <div id="logo" class="col-3">
                    <a href="./index.html">
                        <img src="static/images/logo.svg" alt="лого">
                        <span>Tuki-Tuki</span>                
                    </a>
                </div>
            <div id="menu" class="col-9">
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="#">
                                <p>Раз</p>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="register.php">
                                <p>Регистрация</p>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="login.php">
                                <p>Войти</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div id="content" class="container">
    <form action="register.php" method="POST">
   

    
        <p>
            Логин <input type="text">
        </p>


        <p>
            Пароль <input type="password">
</p>
<p>
            Никнейм <input type="text">
        </p>
<p id="check"><input type="checkbox"> Я принимаю условия по обработке личных данных</p>
<input type="submit" value="Создать учетную запись">
</form>



    <div id="footer" class="container">

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>