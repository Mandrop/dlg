<?php

    $news_id = $_GET['news_id'];
  

    // HENT DATA
    $sql = "SELECT * FROM news WHERE news_id = '$news_id'";
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
     
      <img class="bd-placeholder-img news-img rounded"  src="<?php echo "$dbFetch->news_image" ?>" alt="">

    </div>
    <div class="col-md-6 ">
      <div class="card-body">
        <h1 class="card-title red-header h1 product-info-title"><?php echo "$dbFetch->news_title"; ?></h1>
             
        <div class="card-text-news-container">
        <p class="card-text"><?php echo "$dbFetch->news_content"; ?></p>
 
        </div>
      </div>
    </div>


  </div>

  <!-- BOOTSTRAP NEWS CARD END -->



 </div>