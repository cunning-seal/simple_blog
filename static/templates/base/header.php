<?
if(check_login())
{
    $link2 = "view.php";
    $link2_text = "Мои посты";
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

<!-- <div id="header" class="container">
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
                            <a href="" class="menu_link">
                                <p></p>
                            </a>
                        </div>
                        <div class="col-2">
                        <a href="" class="menu_link">
                                <p></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



<nav class="navbar navbar-default">
  <div class="container-fluid" >
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
            <div class="row" >
                <div class="col-sm-9">
                    <span>Tuki-Tuki</span>                
                </div>
                <div class="col-sm-3">
                    <img src="static/images/logo.svg" alt="лого" width="20px" height="20px">
                </div>
            </div>                  
        </a>
      <!-- <a  href="#">Tuki-Tuki</a> -->
    </div>
    <ul class="nav navbar-nav"  style="padding-left: 30px">
      <li  id="first"><a href="index.php">Главная</a></li>
      <li id="second" ><a href="<?echo $link2?>"><?echo $link2_text?></a></li>
      <li id="third" ><a href="<?echo $link3?>"><?echo $link3_text?></a></li>
    </ul>
  </div>
</nav>