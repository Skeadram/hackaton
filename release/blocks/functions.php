<?php
include ("mysql.php");

function authCookies(){
    include ("mysql.php");
    $pass = password_verify(
        substr_replace(
            $_COOKIE["pass"],
            $_COOKIE["login"],
            ord($_COOKIE["pass"]) % strlen($_COOKIE["pass"]),
            0),
        mysqli_fetch_array(
            mysqli_query(
                $db,
                "SELECT pass FROM users WHERE login='".$_COOKIE["login"]."'"))["pass"]);
    if ($pass){
        return $_COOKIE["login"];
    }
    else{
        return false;
    }
}
function authPost(){
    include ("mysql.php");
    $pass = password_verify(
        substr_replace(
            $_POST["pass"],
            $_POST["login"],
            ord($_POST["pass"]) % strlen($_POST["pass"]),
            0),
        mysqli_fetch_array(
            mysqli_query(
                $db,
                "SELECT pass FROM users WHERE login='".$_POST["login"]."'"))["pass"]);
    if ($pass){
        setcookie('login', $_POST['login'], 0);
        setcookie('pass', $_POST['pass'], 0);
        return $_POST["login"];
    }
    else{
        return false;
    }
}
function login(){
    if (isset($_COOKIE['login']) && isset($_COOKIE['pass']) ) return authCookies();
    elseif (isset($_POST['login']) && isset($_POST['pass'])) return authPost();
    else return false;
}
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}