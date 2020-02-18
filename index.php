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

    <link rel="stylesheet" href="css/style.css">

    <title>Den lille urtegård</title>
  </head>
  <body>

  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Den lille urtegård</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

    <?php
    $sql = "SELECT * FROM pages";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        while($dbFetch = $sqlQuery->fetch_object()){
            echo "
                 <li class='nav-item active'>
                    <a class='nav-link' href='?page=$dbFetch->page_slug'> $dbFetch->page_title 
                    <span class='sr-only'>(current)</span></a>
                </li>
            ";
        }
    }

      //<li class="nav-item active">
      //  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      //</li>

      ?>
    </ul>
  </div>
</nav>

<?php

    // HENT DATA FRA PAGE TABEL
    $slug = $_GET['page'];

    $sql = "SELECT * FROM pages WHERE page_slug='$slug'";
    $sqlQuery = $db->query($sql);


    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }else{
        echo "Couldn't fetch Object";
    }
    // EXIT

    // UDSKRIV DATA TIL SIDEN
    echo "<h1>$dbFetch->page_title</h1>";
    echo "<p>$dbFetch->page_content</p>";

    if($dbFetch->page_image){
        echo "<img src='admin/uploads/$dbFetch->page_image'></img>";
    }

    

?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>