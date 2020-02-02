<html>

<head>
  <title> test </title>
</head>


  <body>
    <?php
      require "mysqli_connect.php";

      #create variables for data to validate php code
      #take input from previous form
      $hypoallergenic=$_POST["hypoallergenic"];
      $children=$_POST["children"];
      $likesOutdoors=$_POST["likesOutdoors"];
      $houseTrained=$_POST["houseTrained"];
      $trained=$_POST["trained"];
      $energy=$_POST["energy"];
      $location=$_POST["location"];
      $type=$_POST["type"];

      #report back to user

      echo("Form data:<br/><br/>".$hypoallergenic.$children.$likesOutdoors.$houseTrained.$trained.$energy.$location.$type);

      #query the database
      echo("Only searching by hypoallergenic, children, type because database currently small");
      $sql = "select * from animal where hypoallergenic = '".$hypoallergenic."' and children = '".$children."' and species = '".$type."';";
      $result = $dbc->query($sql);



      if ($result->num_rows > 0) {
        while($row = $result -> fetch_assoc()) {

          echo('</br><img src="'.$row["photoLink"].'" alt = "'.$row["photoLink"].'"></br>');

          #source: https://www.w3schools.com/php/php_mysql_select.asp
          echo ("<p>".$row["animalName"]."</p>".$row["gender"]."<br>");
          echo ($row["age"]."<br><br>");
          echo ($row["species"]."<br>".$row["location"]."<br>");
          echo("Energy level: ".$row["energy"]."<br>");

        }
      }else {#in case all-query returns no results
        echo ("0 results, try again with broader specifications!");
      }





    ?>
  </body>
</html>
