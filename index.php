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

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:300,400,500&display=swap" rel="stylesheet">

    <title>Projekt</title>
  </head>

  <body>
  
<!-- HEADER START -->
<?php
include ('elements/header.php');
?>
<!-- HEADER END -->


  <!-- Bootstrap Navbar -->
 <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

    <?php/*
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

      */ ?>
    </ul>
  </div>
</nav>-->

<!-- UDVALGTE PRODUKTER -->
<?php
include('elements/udvalgte-produkter.php')
?>
<!-- UDVALGTE PRODUKTER -->



<!-- NEWS SECTION -->
<?php
include('elements/news-section.php')
?>
<!-- NEWS SECTION END -->

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


    <div class="container"></div>
    <footer>
      <div class="container contact-info">
  <div class="row">
    <div class="col">
      <span class='fake-heading'><p>Adresse</p></span>
      <p>Den lille gårdbutik</p>
      <p>Gårdvej 1</p>
      <p>Viborg 8800</p>
    </div>
    <div class="col-6">
      <span class='fake-heading'><p>Kontakt</p></span>
      <p>11 22 33 44</p>
      <p>denlillegaardbutik@gmail.dk</p>
    </div>
    <div class="col">
      <span class='fake-heading'><p>Åbningstider</p></span>
      <p>Mandag - Torsdag   09:00 - 17:30</p>
      <p>Fredag   09:00 - 18:00</p>
      <p>Lørdag - Søndag  10:00 - 13:00</p>
    </div>
  </div>
</div>

<hr class='hr-white'>

<form method='post'>

  <p class='big-paragraph'>Send os en besked</p>
  <input class='d-block' type="text" placeholder='Navn' name='formName'></input>
  <input class='d-block' type='email' placeholder='Email' name='formEmail'></input>
  <textarea class='d-block' name="formText" placeholder='Besked' id="" cols="30" rows="10"></textarea>
  <input class='d-block submit' type="submit" value='Send'>
</form>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>