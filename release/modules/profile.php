<?php
switch ($mysqliArray['user_type']){
    case(1):{
        include ("modules/profile_student.php");
        break;
    }
    case(2):{
        include ("modules/profile_teacher.php");
        break;
    }
    case(3):{
        include ("modules/profile_study_place.php");
        break;
    }
    case(4):{
        include ("modules/profile_company.php");
        break;
    }
}
?>
<style>
    #header {
        padding: 10px 0 !important;
        width: auto; !important;
    }

</style>
<script>
    $(document).ready(function () {
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            document.cookie = name + '=; Max-Age=-99999999;';
        }

        $(".menu").on('click', '#exit',  function () {
            document.cookie = "login=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/hackaton/release;";
            document.cookie = "pass=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/hackaton/release;";
            document.cookie = "login=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "pass=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            window.location.href = "https://lavka-kozha.net/hackaton/release/";
        })
    })
</script>