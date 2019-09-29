<?php
$querry="SELECT id,user_type FROM users WHERE login='".$login."'";
$mysqliArray=mysqli_fetch_array(mysqli_query($db, $querry));
?>
<div class="menu">
    <div class="menu">
        <?php
        switch ($mysqliArray['user_type']){
            case(1):{
                echo('<div class="menu_btn">Профиль</div>
        <div class="menu_btn">Заказы</div>');
                break;
            }
            case(2):{
                echo('<div class="menu_btn">Профиль</div>
        <div class="menu_btn">Студенты</div>');
                break;
            }
            case(3):{
                echo('<div class="menu_btn">Профиль</div>
        <div class="menu_btn">Преподаватели</div>
        <div class="menu_btn">Студенты</div>');
                break;
            }
            case(4):{
                echo('<div class="menu_btn">Профиль</div>
        <div class="menu_btn">Заказы</div>');
                break;
            }
        }
        ?>
        <div class="menu_btn" id="exit">
            Выйти
        </div>
    </div>
</div>
<div class="profile">
    <div id="profile">
        <?php
        switch ($mysqliArray['user_type']){
            case(1):{
                echo('<img src="imgs/student.jpg" alt="" style="height: 100%; width: 100%; border-radius: 50px">');
                break;
            }
            case(2):{
                echo('<img src="imgs/teacher.jpg" alt="" style="height: 100%; width: 100%; border-radius: 50px">');
                break;
            }
            case(3):{
                echo('<img src="imgs/study_place.png" alt="" style="height: 100%; width: 100%; border-radius: 50px">');
                break;
            }
            case(4):{
                echo('<img src="imgs/company.png" alt="" style="height: 100%; width: 100%; border-radius: 50px">');
                break;
            }
        }
        ?>
    </div>
</div>
<style>
    .profile{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-content: center;
    }

    #profile{
        width: 100px;
        height: 100px;
    }

    .menu {
        display: flex;
        margin: 0;
        flex-direction: row;
    }

    .menu_btn {
        width: auto;
        margin: auto 20px;
        line-height: 150%;
        background-color: lightgray;
        padding: 10px 15px;
        border-radius: 30px;
    }

    .menu_btn:hover {
        background-color: gray;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }

    #exit {
        background-color: firebrick;
        border-radius: 30px;
        cursor: pointer;
        width: auto;
        padding: 15px 25px;
        line-height: 100%;
    }
</style>