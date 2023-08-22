
        <!--OVDJE SE NALAZI logout.php-->
        <!--KORISNIK SE ODJAVLJUJE SA SVOG PROFILA-->
<?php
    require_once "include/connection.inc.php";

    session_start();
   
    require "module/head.module.php";
    require "module/header.module.php";
?>

<body>
    <div class="wrapper-logout">
        <h1 class="question">Do you want to logout?</h1>

            <!--POCETAK FORME ZA LOGOUT-->
        <form action="functions/logout.function.php" method="POST">
            <input type="submit" name="username" value="YES" id="left-button">
            <button class="right-button"><a href="dashboard.php">NO</a></button>
        </form>
            <!--KRAJ FORME ZA LOGOUT-->

    </div>
</body>

