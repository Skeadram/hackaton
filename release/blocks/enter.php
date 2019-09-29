<div class="enter">
    <form action="" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
        <button id="registration_button">Зарегистрироваться</button>
    </form>
</div>
<style>
    .enter{
        display: flex;
        justify-content: space-around;
        flex-direction: column;
    }
    form {
        display: flex;
        justify-content: space-around;
        flex-direction: row;
    }

    input {
        font-size: 16pt;
        border-radius: 30px;
        text-align: center;
        border: solid 1px black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    button {
        font-size: 16pt;
        border-radius: 30px;
        text-align: center;
        border: solid 1px black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }
</style>
<script>
    $(document).ready(function () {
        $("#registration_button").on('click', function (event) {
            event.preventDefault();
            window.location.href = "https://lavka-kozha.net/hackaton/release/Registration.php";
        })
    })
</script>