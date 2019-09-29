<?php
include ("mysql.php");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit" name="submit" value="Войти">
</form>
<?php
if (isset($_POST)){
    $querry="SELECT pass FROM users WHERE login='".$_POST["login"]."'";
    $mysql_res=mysqli_query($db, $querry);
    $dbpass=mysqli_fetch_array($mysql_res)["pass"];
    $pass = password_verify(substr_replace($_POST["pass"], $_POST["login"], ord($_POST["pass"]) % strlen($_POST["pass"]), 0), $dbpass);
    if ($pass){
        echo('Вы вошли');
    }
    else{
        echo ('Вы не вошли');
    }
}
?>
</body>
</html>
