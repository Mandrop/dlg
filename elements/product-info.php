<?php

    $product_id = $_GET['product_id'];
    //$page = $_GET['page'];

    // HENT DATA
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $sqlQuery = $db->query($sql);

     if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();

    } 



?>
<!-- BOOTSTRAP NEWS CARD -->
<div class="card mb-3 product-info">
  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="images/mel.jpg" alt="">

    </div>
    <div class="col-md-6 ">
      <div class="card-body">
        <h1 class="card-title red-header h1"><?php echo "$dbFetch->product_title"; ?></h1>
              <p class='price'><?php echo "$dbFetch->product_price"; ?> kr. <span class="font-weight-lighter">inkl. moms</span> </p>
        <div class="card-text-news-container">
        <p class="h3">Produktbeskrivelse</p>
        <p class="card-text">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, expedita.<br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, corrupti?</p>
        <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
        <a href='' class='fake-btn'>LÆG I KURV</a>
 
        </div>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP NEWS CARD END -->

 <!-- BOOTSTRAP NEWS CARD -->
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

 <!-- BOOTSTRAP NEWS CARD END -->