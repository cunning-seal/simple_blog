<?
require_once('static/scripts/auth.php');

if (!empty($_POST))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (login($login, $password))
    {
        header("Location: http://192.168.64.2/site/index.php"); 
    }
    else
    {   
        $result = "Неправильный логин и/или пароль";
        require('static/templates/login/login_form_template.php');
    }
    
}
else{
    if(check_login())
    {
        $result = "Вы уже залогинены, ".$_SESSION['username'];
    }
    else {
        $result = "";
    }
    require('static/templates/login/login_form_template.php');
}
?>