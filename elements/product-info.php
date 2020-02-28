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
<div class="product-info"> 
<div class="card mb-3 product-info">
  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="<?php echo "$dbFetch->product_image" ?>" alt="">

    </div>
    <div class="col-md-6 ">
      <div class="card-body">
        <h1 class="card-title red-header h1 product-info-title"><?php echo "$dbFetch->product_title"; ?></h1>
              <p class='price'><?php echo "$dbFetch->product_price"; ?> kr. <span class="font-weight-lighter">inkl. moms</span> </p>
        <div class="card-text-news-container">
        <p class="h3">Produktbeskrivelse</p>
        <p class="card-text"><?php echo "$dbFetch->product_content"; ?></p>
        <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
        <a href='' class='fake-btn'>LÆG I KURV</a>
 
        </div>
      </div>
    </div>


  </div>

  <!-- BOOTSTRAP NEWS CARD END -->


 <!-- BOOTSTRAP NEWS CARD -->

<div class="container ">

  <div class="row justify-content-center p-3">
    <div class="col-12 col-md-6">
      <div class="d-flex flex-column justify-content-center px-5 py-3 border-top">
          <p class=" red-header">Majbrit Pedersen</p>
          <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe totam enim 
              minus nihil. Optio, dolore saepe eaque consectetur nulla vero?"</p>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="d-flex flex-column justify-content-center px-5 py-3 border-top">
          <p class=" red-header">Majbrit Pedersen</p>
          <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe totam enim 
              minus nihil. Optio, dolore saepe eaque consectetur nulla vero?"</p>
      </div>
    </div>
  </div>
 
</div>

<!--  

 -->
 <!-- BOOTSTRAP NEWS CARD END -->

 </div>