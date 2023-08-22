                                      <!--OVDJE SE NALAZI dashboard.php-->
                          <!--UNUTAR DASHBOARDA SE ODVIJAJU SVE STO KORISNK TREBA DA VIDI-->
                          <!--UPLOAD SLIKA,UPLOAD VIDEA,EDITOVANJE PROFILA,KOMENTARI...-->

<?php
    require_once "include/connection.inc.php";

    session_start();
   
    require "module/head.module.php";
    require "module/header.module.php";
    require "module/aside.module.php";
?>


<body>
  <div class="wrapper-dashboard" id="background">
  <br><br>
  <main>
  
     <!--OVDJE SE NALAZI QUERY KOJI DOBAVLJA SVE IZ TABELE images-->
<?php

  $table = 'images';
  $sql = "SELECT images.id AS image_id,user_id,image,username,text,user.id 
          FROM $table INNER JOIN user ON images.user_id = user.id
          ORDER BY images.id DESC";

  $query = $connection->prepare($sql);
  $query->execute();
    

  while($row = $query->fetch()){

      $id = $_SESSION["id"];

      echo "<h2 style= 'color:wheat; font-family: Arial;'>Posted by $row[username]</h2>";
      echo "<br>";
      echo "<div>";
             echo "<img src= images/$row[image] >";
             echo "<br>";
             echo "<br>";
             echo "<p class='comments'>" .$row['text'] . "</p>";         
      echo "<div class='babo'>";

      if($row["user_id"] == $id){
        echo "<form method='POST' action='functions/delete.function.php' class='form-delete'>
                <input type='hidden' name='image_id' value=".$row['image_id']." > 
                <button type='submit' name='delete' class='button-delete'>Delete</button>
              </form>";
      }
       
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";  
        
      echo "</div>";   
      }

?>
    <!--OVDJE QUERY ZAVRSAVA ZA DOBAVLJANJE PODATKA IZ TABELE images-->


    <!--OVDJE SE NALAZI QUERY KOJI DOBAVLJA PODATKE IZ TABELE videos-->
<?php
  $table1 = 'videos';
  $sql = "SELECT videos.id AS video_id,user_id,video,username,text,user.id 
          FROM $table1 INNER JOIN user ON videos.user_id = user.id
          ORDER BY videos.id DESC";
          
  $query = $connection->prepare($sql);
  $query->execute();

  while($row = $query->fetch()){
      {
             echo "<h2 style= 'color:wheat; font-family: Arial;'>Posted by $row[username]</h2>";
             echo "<br>";
             echo "<video  width='100%'  controls >
             <source src= videos/$row[video]  type='video/mp4'></video>";
             echo "<br>";
             echo "<br>";
             echo "<p class='comments'>" .$row['text'] . "</p>";

             echo "<div class='babo'>";

             if($row["user_id"] == $id){
             echo "<form method='POST' action='functions/delete.function.php'>
                      <input type='hidden' name='video_id' value=".$row['id']."> 
                      <button type='submit' name='delete' class='button-delete'>Delete</button>
                   </form>"; 
            }
            
             echo "<br>";
             echo "<br>";
             echo "<br>";
             echo "<br>";
             echo "<br>";
             echo "</div>";  
      }
  }
?>
  <!--OVDJE ZAVRSAVA QUERY KOJI DOBAVLJE PODATKE IZ TABELE videos-->

  <img src="images/iphone.jpg" alt="">
  <br><br>
 
  </main>

</div>
</body>
</html>