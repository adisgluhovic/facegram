
        <!--OVDJE SE NALAZI update.php-->
        <!--KORISNIK MOZE DA VIDI TABELU SA USERNAMOM-->
        <!--I VODI GA NA EDITOVANJE PROFILA-->
<?php
    require_once "include/connection.inc.php";

    session_start();

    require "module/head.module.php";
    require "module/header.module.php";

?>

<body class="wrapper-dashboard">

    <!--OVDJE SE NALAZI QUERY KOJI DOBAVLJA PODATKE IZ TABELE user-->
    <?php
        $sql = $connection->prepare("SELECT * FROM user");
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);    
        $result = $sql->fetchAll();
    ?>
    <!--OVDJE QUERY ZAVRSAVA-->

     <!--OVDJE SE NALAZI TABELA KOJU KORISNIK MOZE DA VIDI-->
<table class="update-table">
        <thead>
            <tr>
                <th class="your-username">YOUR USERNAME</th>
                <th class="your-profile">EDIT YOUR PROFILE</th>
            </tr>

        
    <?php
        foreach($result as $column => $value){  
            if($_SESSION["username"] == $value["username"]){ 
             echo "<tr>";
                echo "<td class='your-username1'>" . $_SESSION["username"] . "</td>";
                echo "<td class='your-profile1'><a href='edit.php?id=" . $value["id"] ."'>Edit</a></td>";
             echo "</tr>";
                }
            }          
    ?>

        </thead>
    <tbody>
        
    </tbody>  
</table>
     <!--OVDJE TABELA ZAVRSAVA-->
<img class="arow" src="images/ared-arow.png" alt="arow"> <!--SLIKA STRELICE-->
</body>