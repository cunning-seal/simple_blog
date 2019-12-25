<?
if(check_login())
{
    $link2 = "view.php";
    $link2_text = "Мои объявления";
    $link3 = "close.php";
    $link3_text = "Выйти";
}
else
{
    $link2 = "register.php";
    $link2_text = "Регистрация";
    $link3 = "login.php";
    $link3_text = "Войти";
}
?>

<div id="header" class="container">
        <div class="row">
                <div id="logo" class="col-3">
                    <a href="index.php">
                        <img src="static/images/logo.svg" alt="лого">
                        <span>Tuki-Tuki</span>                
                    </a>
                </div>
            <div id="menu" class="col-9">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <a href="about.php" class="menu_link">
                                <p>О нас</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="<?echo $link2;?>" class="menu_link">
                                <p><?echo $link2_text;?></p>
                            </a>
                        </div>
                        <div class="col-2">
                        <a href="<?echo $link3;?>" class="menu_link">
                                <p><?echo $link3_text;?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>