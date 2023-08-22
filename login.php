        <!--OVDJE SE NALAZI KONEKCIJA NA BAZU PODATAKA-->
<?php
    require "include/connection.inc.php";

    session_start();

    if(isset($_GET["message"])){
        echo "<div style='position: absolute;
                          width: 30%;
                          padding: 8px;
                          background: red;
                          font-family: cursive;
                          color: white;
                          bottom: 15%;
                          left: 35%;
                          text-align: center;'><h3>Username or password is incorect!</h3></div>";
    }

?>
        


                <!----------------------------------------------------------------->

                        <!--OVDJE SE NALAZI login.php-->
                        <!--UNUTRA SE NALAZI FORMA KOJA VRSI PROVJERU ZA LOGOOVANJE-->
                        <!--SVE FUNKCIJE(backhand provjere se nalaze u folderu functions)-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper-login">
    <div class="logo">
        <a href="welcome.php"><img src="images/facegram-logo.png" alt="Logo Facegram"></a>
            <h3>Facegram</h3>
    </div>

     <!--POCETAK FORME-->
    <form class="form-login" action="functions/login.function.php" method="POST">
        <h2>Login</h2>
        <br><br><br><br>

        <input type="text" name="username"  required maxlength="100" placeholder="Username">
        <br><br>

        <input type="password" name="password" id="myInput" required maxlength="256" placeholder="Password">
        <input type="checkbox" style="position: absolute;
                                      width: 1%;
                                      right: 41%;
                                      bottom: 43%;"  
                                      onclick="myFunction()">
        <br><br>

        <input type="hidden" name="email" required maxlength="50" placeholder="Email">
        <br>

        <input type="hidden" name="id">
        <input type="submit" class="confirm" value="Confirm">
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