
    <!--OVDJE SE NALAZI upload.pic.php-->
    <!--KORISNIK UPLOADUJE ZELJENI VIDEO-->
    <!--I POSTAVLJA JE NA DASHBOARD GDJE DRUGI KORISNICI MOGU VIDJETI-->
<?php
    require_once "include/connection.inc.php";

    session_start();

    require "module/head.module.php";
    require "module/header.module.php";
    require "module/aside.module.php";
    
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

      <!--OVDJE SE NALAZI FORMA ZA UNOSENJE ZELJENOG VIDEA-->
    <form class="upload-picture" method="POST" action="functions/upload.vid.function.php" enctype="multipart/form-data">
        <label for="fajlovi">Insert your video</label>
        <br>
        <input type="hidden" name="size" value="1000000">
        <input class="file" type="file" name="image">
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br> 
        <label>Write your comment</label>
        <br>
        <textarea name="text" cols="40" rows="7" placeholder="Write here"></textarea>
        <input class="upload" type="submit" name="upload" value="Upload">
    </form>
    <!--OVDJE ZAVRSAVA FORMA-->

  </div>
</body>
</html>