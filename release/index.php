<?php
include("blocks/mysql.php");
include("blocks/functions.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link rel="stylesheet" href="../Main.css">
    <link rel="stylesheet" href="normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
<div id="header">
    <div class="logo"><h1>E-PAW</h1></div>
        <?php
        if ($login = login()) {
            include('blocks/miniprofile.php');
        } else {
            include('blocks/enter.php');
        }
        ?>
</div>
<div id="main">
    <?php
    if ($login = login()) {
        include('modules/profile.php');
    } else {
        include('modules/main.php');
    }
    ?>
</div>
<div class="footer" id="footer">
    <div class="contact">
        <h3>Контактные данные:</h3>
        <ul>
            <li>Life: +375292283575 Олег</li>
            <li>A1: +375444938271 Аркадий</li>
            <li>MTC: +375334958271 Джон</li>
    </div>
</div>
</body>
</html>
<style>
    body{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        min-height: 100vh;
        background-color: beige;;
    }
    #header {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
        padding: 0 15px;
        margin: auto 0;
    }

    .logo{
        display: flex;
        justify-content: space-around;
        flex-direction: column;
    }

    .footer {
        margin-top: 30px;
        padding-left: 10px;
        background-color: #555555;
    }
</style>