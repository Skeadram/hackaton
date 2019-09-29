<?php
include("mysql.php");
$pass = password_hash(substr_replace($_POST["pass"], $_POST["login"], ord($_POST["pass"]) % strlen($_POST["pass"]), 0), PASSWORD_BCRYPT);
$querry = "INSERT INTO users(login, pass, user_type) VALUES ('" . $_POST['login'] . "', '" . $pass . "', (SELECT id FROM user_types WHERE name='".$_POST["type"]."'))";
if (!$mysql_ans = mysqli_query($db, $querry)) {
    echo("false");
    var_dump($querry);
} else {
    $querry="SELECT id FROM users WHERE login='" . $_POST["login"]."'";
    if(!$user_id = mysqli_fetch_array(mysqli_query($db, $querry))["id"]){
        var_dump($querry);
    }
    switch ($_POST['type']) {
        case ('student'):
        {
            $querry = "INSERT INTO students(user_id, name, surname) VALUES ('" . $user_id . "', '" . $_POST["name"] . "', '" . $_POST["surname"] . "')";
            if ($mysql_ans = mysqli_query($db, $querry)) {
                echo("true");
            } else {
                echo("false");
                var_dump($querry);
            }
            break;
        }
        case ('teacher'):
        {
            $querry = "INSERT INTO teachers(user_id, name, surname) VALUES ('" . $user_id . "', '" . $_POST["name"] . "', '" . $_POST["surname"] . "')";
            if ($mysql_ans = mysqli_query($db, $querry)) {
                echo("true");
            } else {
                echo("false");
                var_dump($querry);
            }
            break;
        }
        case ('study_place'):
        {
            $querry = "INSERT INTO study_places(user_id, name) VALUES ('".$user_id."', '" . $_POST["name"] . "')";
            if ($mysql_ans = mysqli_query($db, $querry)) {
                echo("true");
            } else {
                echo("false");
                var_dump($querry);
            }
            break;
        }
        case ('company'):
        {
            $querry = "INSERT INTO companies(user_id, name) VALUES ('".$user_id."', '" . $_POST["name"] . "')";
            if ($mysql_ans = mysqli_query($db, $querry)) {
                echo("true");
            } else {
                echo("false");
                var_dump($querry);
            }
            break;
        }
    }

}
?>
