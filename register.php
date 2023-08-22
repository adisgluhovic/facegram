       
<?php
     require_once "include/connection.inc.php";
?>
       

<!-- -------------------------------------------------------------- -->

    
            <!--OVDJE SE NALAZI register.php-->
            <!--UNUTAR NJEGA IMA FORMA KOJA VRSI REGISTRACIJU-->
            <!--SVE FUNKCIJE(backhand provjere se nalaze u folderu functions)-->
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper-register">
        <div class="logo">
            <a href="welcome.php"><img src="images/facegram-logo.png" alt="Logo Facegram"> </a>
            <h3>Facegram</h3>
        </div>
   
    <!--POCETAK FORME-->
    <form class="form-register" action="functions/register.function.php" method="POST">
        <h2>Register</h2>
        <br><br><br><br>

        <input type="text" name="username" required maxlength="100" placeholder="Insert username">
        <br><br>

        <input type="password" name="password" id="myInput"  required maxlength="256" placeholder="Insert password">
        <input type="checkbox" style="position: absolute;
                                      width: 1%;
                                      right: 41%;
                                      bottom: 43%;"  
                                      onclick="myFunction()">

        <br><br>

        <input type="email" name="email" required maxlength="50" placeholder="Insert email">
        <br><br>

        <input type="reset" class="reset">  <input type="submit" class="submit">
    </form>
    <!--KRAJ FORME-->
</div>
<script>
    function myFunction() {
    var x = document.getElementById("myInput");
        if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
  }
}
</script>
</body>
</html>