<?php
session_start();
$_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
include('config.php');
?>
<!-- HEADER START -->
  <header>
    <!-- BOOTSTRAP NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-oko-green">
  <a class="navbar-brand header-logo-container position-relative" href="index.php">
  <div class="container header-logo d-flex justify-content-center align-items-center">
  <p class="h1">Den lille Gårdbutik</p>
  </div>

  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav d-flex ">
    <!--
      <li class="nav-item active">
        <a class="nav-link" href="index.php">FORSIDE <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produktside.php">PRODUKTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="om-os.php">OM OS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">KONTAKT</a>
      </li>
      -->
      <?php
        userPage($db);
      ?>
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
<!-- HEADER END -->
