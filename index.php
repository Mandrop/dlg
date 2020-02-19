<?php
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1>Frederik!!!</h1>
    <h1>Henrik</h1>
     <h1>Henrik</h1>
    <h1>Frederik2</h1>
    <?php

if ($db) {
  echo 'connected<br>';
} else {
  echo 'not connected';
}


      /*$sql = "SHOW TABLES FROM $db";
      $sqlQuery = $db->query($sql);*/

      $sql = ("SHOW TABLES FROM dlg");
      $sqlQuery = $db -> query($sql);

      if($sqlQuery){
        while($table = mysqli_fetch_array($sqlQuery)) { // go through each row that was returned in $result
          echo($table[0] . "<br>");    // print the table that was returned on that row.
      }
      }else{
        echo "Fail";
      }
      
      /*while($table = mysql_fetch_array($sqlQuery)) { // go through each row that was returned in $result
        echo($table[0] . "<br>");    // print the table that was returned on that row.
    }*/





    ?>

    <?php

    if (isset($_POST['insert'])){
      ($_GET['page']);

      $sql = "SELECT * FROM pages";





      $result = $_POST['insert'];
      echo $result;
    }

    echo "
      <form action='#' method='POST'>
          <select onchange='this.form.submit()' name='insert'>
              <option value='none'>Indsæt element</option>
              <option value='Header'>Header</option>
              <option value='Paragraph'>Paragraph</option>
              <option value='Pik'>Pik</option>
          </select>
      </form>
    ";
    

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>