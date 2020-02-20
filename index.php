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
  <h1>Hello, HENRIK!</h1>
  <header>
    <!-- BOOTSTRAP NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-oko-green">
  <a class="navbar-brand header-logo-container position-relative" href="#">
  <div class="container header-logo d-flex justify-content-center align-items-center">
  <p class="h1">Den lille Gårdbutik</p>
  </div>

  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav d-flex ">
      <li class="nav-item active">
        <a class="nav-link" href="#">FORSIDE <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRODUKTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">OM OS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">KONTAKT</a>
      </li>
      <li class="nav-item nav-bar-last-item">
        <!-- KURV -->
          <a class="nav-link d-flex align-items-center" href="#">KURV <img class="navbar-kurv-logo" src="images/shopping-basket-solid.svg" alt="Indkøbskurv"></a>
           <!-- KURV -->
      </li>

 
   
    </ul>

  </div>
</nav>
    <!-- BOOTSTRAP NAVBAR END -->
    <div class="header-img">
    
    </div>
    </header>

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


<div class="container main-content">
  <div class="container">
  <h1 class='big-h1'>Udvalgte produkter</h1>
<div class="card-deck udvalgte-produkter">
  <div class="card product-card">
    <img class="card-img-top" src="images/mel2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk hvedemel</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer... <a href="" class="read-more">Læs mere</a></p>
      <p class='price'>29,95 kr</p>
      <a href="#" class="fake-btn">LÆG I KURV</a>
    </div>
  </div>
  <div class="card product-card">
    <img class="card-img-top" src="images/oel2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk rug øl</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer... <a href="" class="read-more">Læs mere</a></p>
      <p class='price'>39,95 kr</p>
      <a href="#" class="fake-btn">LÆG I KURV</a>
    </div>
  </div>
  <div class="card product-card">
    <img class="card-img-top" src="images/provoiant-rapsolie-citron.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk rapsolie</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer... <a href="" class="read-more">Læs mere</a></p>
      <p class='price'>59,95 kr</p>
      <a href="#" class="fake-btn">LÆG I KURV</a>
    </div>
  </div>
</div>
</div>

<div class="container">
<div class="card mb-3 news" style="max-width: 50%;">
  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">

    </div>
    <div class="col-md-6">
      <div class="card-body card-body-news">
        <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>
        <div class="card-text-news-container">
        <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
 
        </div>
      </div>
    </div>
  </div>
</div>
</div>





  </div>

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