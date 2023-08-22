                                    <!--OVDJE SE NALAZI edit.php-->
                                <!--OVDJE KORISNIK EDITUJE SVOJ PROFIL-->
                                        <!--username-->
                                        <!--password-->
                                        <!--email-->

<?php
    require_once "include/connection.inc.php";

    session_start();
     
    require "module/head.module.php";
    require "module/header.module.php";

       /*OVDJE SE NALAZI KOD KOJI PROVJERAVA PODATKE OD USERA*/
       /*KORISTECI ID OD KORISNIKA*/

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = $connection->prepare("SELECT * FROM user WHERE id = $id");
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

        if(count($results = $sql->fetchAll())){
            $id = $results[0]['id'];
            $username = $results[0]['username'];
            $password = $results[0]['password'];
            $email = $results[0]['email'];

        }else{
            header("Location: update.php?message=Nije postavljeno");  
        }
    }else{
        header("Location: update.php?message=Nije prebrojio");
    }
?>

        <!--OVDJE ZAVRSAVA PROVJERA-->


        <!--OVDJE POCINJE FORMA ZA KORISNIKA DA EDITUJE SVOJE PODATKE-->
<body class="wrapper-dashboard">
    <div class="wrapper-edit">
        <form action="functions/edit.function.php" method="POST">
            <label for="username">New username</label>
            <input type="text" name="username" value="<?php echo  $_SESSION["username"]; ?>">

            <br>    

            <label for="password">New password</label>
            <input type="text" name="password" value="<?php echo $_SESSION["password"];?>">

            <br>
            
            <label for="email">New email</label>
            <input type="text" name="email" value="<?php echo $_SESSION["email"];?>">

            <br>
            <br>
       
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input class="sacuvaj" type="submit" value="Sacuvaj"> 
        </form>   
        <!--OVDJE ZAVRSAVA FORMA-->
    </div>
</body>