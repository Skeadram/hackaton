<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset utf-8>
    <title>Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="../scripts/script.js"></script>
    <!--    <link rel="stylesheet" href="Registration.css" type="text/css" v="--><?// echo (time());?><!--">-->
</head>
<body>
<div id="registration">
    <h1>Регистрация</h1>
    <div id="butons">
        <div class="button student">Студент</div>
        <div class="button teacher">Преподаватель</div>
        <div class="button study_place">Учреждение образования</div>
        <div class="button company">Компания</div>
    </div>
    <div id="forms">
        <form class="otsp student" action="" method="get">
            <input type="hidden" name="type" value="student">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="surname" placeholder="Фамилия">
            <input class="buttons" type="submit" name="submit" value="Зарегистрироваться">
        </form>

        <form class="otsp teacher" action="" method="get">
            <input type="hidden" name="type" value="teacher">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="surname" placeholder="Фамилия">
            <input class="buttons" type="submit" name="submit" value="Зарегистрироваться">
        </form>

        <form class="otsp study_place" action="" method="get">
            <input type="hidden" name="type" value="study_place">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="text" name="name" placeholder="Название">
            <input class="buttons" type="submit" name="submit" value="Зарегистрироваться">
        </form>

        <form class="otsp company" action="" method="get">
            <input type="hidden" name="type" value="company">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="text" name="name" placeholder="Название">
            <input class="buttons" type="submit" name="submit" value="Зарегистрироваться">
        </form>
    </div>
    <div class="status accepted" style="background: forestgreen; display: none">
        Регистрация прошла успешно
    </div>
    <div class="status declined" style="background: crimson; display: none">
        Регистрация не удалась
    </div>
</div>
</body>
</html>
<style>
    h1{
        text-align: center;
        margin: 10px;
    }

    body{
        background-image: url("../imgs/2950078-abstract-triangle-gradient-texture-digital-art___mixed-wallpapers.jpg");
        padding: 20px;
        font-size: 14px;
    }
    form{
        text-align: left;
        width: 100%;
        margin: 0 0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px #555555;
        flex-direction: column;
        justify-content: space-around;
        height: 30vh;
    }

    input[type="submit"]
    {
        width: auto;
        margin: 5px auto;
        padding: 6px 15px;
        border: none;
        border-radius: 5px;
        width: auto !important;
        background-color: gray;
    }
    .buttons{
        display: flex;
    }
    .otsp{
        background-color: bisque;
        display: none;
    }
    .otsp input{
        margin-top: 5px;
        width: 100%;
    }
    .otsp label{
        margin-top: 10px;
        display: block;
    }
    .otsp .selected{
        display: block !important;
    }
    #registration{
        display: flex;
        width: 50%;
        margin:0 auto;
        flex-direction: column;
        justify-content: space-around;
    }
    #butons{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 20px 0;
    }
    .button{
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 20px;
        box-shadow: 0 0 15px #555555;
        background-color: bisque;
    }
    .selected{
        box-shadow: 0 0 15px #cccccc;
        display: flex;
    }
    .status{
        width: 100%;
        padding: 10px 15px;
        margin: 10px 0;
        border-radius: 20px;
        font-size: 16pt;
        text-align: center;
    }
</style>
<script>
    $(document).ready(function () {
        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        function eraseCookie(name) {
            document.cookie = name+'=; expires=Thu, 01 Jan 1970 00:00:00 UTC';
        }
        $(".student").addClass("selected");
        $("#butons>.student").on("click", function () {
            $(".button").removeClass("selected");
            $(".otsp").removeClass("selected");
            $(".student").addClass("selected");

        })
        $("#butons>.teacher").on("click", function () {
            $(".button").removeClass("selected");
            $(".otsp").removeClass("selected");
            $(".teacher").addClass("selected");

        })
        $("#butons>.study_place").on("click", function () {
            $(".button").removeClass("selected");
            $(".otsp").removeClass("selected");
            $(".study_place").addClass("selected");

        })
        $("#butons>.company").on("click", function () {
            $(".button").removeClass("selected");
            $(".otsp").removeClass("selected");
            $(".company").addClass("selected");

        })


        $( "form" ).submit(function( event ) {
            $(".status").hide();
            event.preventDefault();
            var data={
                "type": $(event.currentTarget).find("input[name=type]").val(),
                "login": $(event.currentTarget).find("input[name=login]").val(),
                "pass": $(event.currentTarget).find("input[name=password]").val(),
                "name": $(event.currentTarget).find("input[name=name]").val(),
                "surname": $(event.currentTarget).find("input[name=surname]").val()
            }
            console.log(data);
            $.ajax({
                type:"post",
                url:'blocks/registration.php',
                // dataType:'json',
                data: data,

                success:function (result) {
                    if (result=="true"){
                        $(".accepted").show();
                        document.cookie = "login=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        document.cookie = "pass=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        setCookie('login', data['login'], 90);
                        setCookie('pass', data['pass'], 90);
                        setTimeout(function(){
                            window.location.href = "http://lavka-kozha.net/hackaton/release/";
                        }, 2000);
                    }
                    else{
                        console.log(result);
                        $(".declined").show();
                    }
                }


            })
        });
    });
</script>