
    <!--OVDJE SE NALAZI comments.php-->
    <!--KORISNIK PISE KOMENTAR ZA ZELJENU SLIKU-->
    <!--I POSTAVLJA JE NA DASHBOARD GDJE DRUGI KORISNICI MOGU VIDJETI-->
<?php
    require_once "include/connection.inc.php";/*KONEKCIJA NA BAZU*/

    session_start();/*POCETAK SESIJE*/

    require "module/head.module.php";/*UKLJUCIVANJE HEAD-A*/
    require "module/header.module.php";/*UKLJUCIVANJE HEADER-A*/
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper-upload-pic">

        <!--POCETAK FORME GDJE KORISNIK UPISUJE KOMENTARE-->
        <form class="upload-picture" method="POST" action="functions/comment.function.php">
            <label>Write your comment</label>
            <br>
            <textarea name="text" cols="40" rows="7" placeholder="Write here"></textarea>
            <input class="upload" type="submit" name="upload-comments" value="Upload">
        </form>
        <!--ZAVRSETAK FORME-->

    </div>
</body>
</html>