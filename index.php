<?php
include('admin/pages.php');
include('config.php');
include('functions.php');
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
    

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:300,400,500&display=swap" rel="stylesheet">

    <title>Projekt</title>
  </head>

  <body class="">
  <!-- CHECK IF ON INDEX -->
  <?php
  indexRedirect();
  ?>
<!-- HEADER START -->
<?php
include ('elements/header.php');
?>
<!-- HEADER END -->

<!-- MAIN CONTENT  -->
<main class="container main-content shadow">


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

<!-- HENRIK WORKSPACE -->

   <?php
    $page = $_GET['page'];

    if(function_exists($page)){
        call_user_func($page,$db);
    }
   ?>

<!-- HENRIK WORKSPACE -->


<!-- UDVALGTE PRODUKTER -->
<?php
//include('elements/udvalgte-produkter.php')
?>
<!-- UDVALGTE PRODUKTER -->



<!-- NEWS SECTION -->
<?php
//include('elements/news-section.php')
?>
<!-- NEWS SECTION END -->

<?php
    // HENT DATA FRA PAGE TABEL
    $slug = $_GET['page'];

    $sql = "SELECT * FROM pages WHERE page_slug='$slug'";
    $sqlQuery = $db->query($sql);

    if(mysqli_num_rows($sqlQuery) > 0){
    //if($sqlQuery){
      $dbFetch = $sqlQuery->fetch_object();

      echo "
        <h1 class='big-h1'>$dbFetch->page_title</h1>
      <div class='jumbotron jumbotron-fluid bg-white'>
        <div class='container d-flex flex-column align-items-center'>
          
          <div class='container d-flex align-items-center align-items-md-start justify-content-md-center flex-column flex-md-row '>
           <p class='lead mr-4 p-4 rounded shadow-sm'>$dbFetch->page_content</p>
           ";
           if($dbFetch->page_image){
           echo "
           <img class='img-fluid om-os-img rounded' src='admin/uploads/$dbFetch->page_image' alt='Den lille gårdbutik'></img>
           ";
           }
           echo "
          </div>
      
        </div>
      </div>
      ";

      
      

      /*if($dbFetch->page_image){
        echo "<img class='img-fluid rounded mx-auto d-block user-page-img' src='admin/uploads/$dbFetch->page_image'></img>";
      }*/
  }/*else{
      echo "Couldn't fetch Object";
  }*/
  //echo "<p>$dbFetch->page_content</p>";


    

?> 

<!-- MAIN END -->
</main>

<!-- IMAGE GALLERY BOTTOM -->
<div class="container-fluid p-0 mb-5 d-flex image-gallery-bottom">

    <div class="w-50">
    <img src="images/citrus-frugter.jpg" alt='Citrus frugter'>
    </div>
<div class="w-50">
    <img src="images/ko.jpg" alt='Køer på mark'>
</div>
</div>

<!-- IMAGE GALLERY BOTTOM -->


    <!-- FOOTER START -->
    <?php
  include('elements/footer.php')
    ?>
 <!-- FOOTER END -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>