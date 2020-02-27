<!-- UDVALGTE PRODUKTER -->

<?php

//$sql = "SELECT * FROM products";
$sql = "SELECT * FROM products";
$sqlQuery = $db->query($sql);

/*while($dbFetch = mysqli_fetch_row($sqlQuery)){
  echo $dbFetch->product_id;
  printf("%s", $dbFetch[0]); 
}*/
if($sqlQuery){
  $productList = [];
  while($dbFetch = $sqlQuery->fetch_object()){
    array_push($productList, $dbFetch->product_id);
  }




  // get 2 random indexes from array $arrX

  // get random index from array $arrX
  $randIndex = array_rand($productList, 3);
  $randId = [];

  for ($x = 0; $x <= 2; $x++) {
    array_push($randId, $productList[$randIndex[$x]]);
}
  // RANDOMIZE PRODUCT_ID ORDER
  shuffle($randId);
  
}




?>
  <div class="container">
  <h1 class='big-h1'>Udvalgte produkter</h1>
<div class="card-deck udvalgte-produkter">
  <?php

$sql = "SELECT product_title, product_price, product_image FROM products WHERE product_id='$randId[0]'";
$sqlQuery = $db->query($sql);


if($dbFetch = $sqlQuery->fetch_object()){
  $title = $dbFetch->product_title;
  $price = $dbFetch->product_price;
  $image = $dbFetch->product_image;
}




  ?>
  <a href="test.dk">
  <div class="card product-card shadow-sm">
    <img class="card-img-top" src="<?php /*images/mel2.jpg*/ echo $image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php

      
      echo $title;
      ?>
      
    
    
      </h5>
      <p class="card-text"> </p>
      <p class='price'><?php echo $price . " kr."; ?></p>
      <div class='d-flex justify-content-between'>
      <a href="<?php echo "?page=produkt_info&product_id=" . ($randId[0]);  ?>" class="read-more">Læs mere</a>
      <a href="#" class="green">LÆG I KURV</a>
      </div>
    </div>
  </div>
  </a>
  <?php

$sql = "SELECT product_title, product_price, product_image FROM products WHERE product_id='$randId[1]'";
$sqlQuery = $db->query($sql);


if($dbFetch = $sqlQuery->fetch_object()){
  $title = $dbFetch->product_title;
  $price = $dbFetch->product_price;
  $image = $dbFetch->product_image;
}




  ?>
  <div class="card product-card shadow-sm">
    <img class="card-img-top" src="<?php /*images/mel2.jpg*/ echo $image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php

      
      echo $title;
      ?>
      
    
    
      </h5>
      <p class="card-text"> </p>
      <p class='price'><?php echo $price . " kr."; ?></p>
      <div class='d-flex justify-content-between'>
      <a href="<?php echo "?page=produkt_info&product_id=" . ($randId[1]);  ?>" class="read-more">Læs mere</a>
      <a href="#" class="green">LÆG I KURV</a>
      </div>
    </div>
  </div>
  <?php

$sql = "SELECT product_title, product_price, product_image FROM products WHERE product_id='$randId[2]'";
$sqlQuery = $db->query($sql);


if($dbFetch = $sqlQuery->fetch_object()){
  $title = $dbFetch->product_title;
  $price = $dbFetch->product_price;
  $image = $dbFetch->product_image;
}




  ?>
  <div class="card product-card shadow-sm">
    <img class="card-img-top" src="<?php /*images/mel2.jpg*/ echo $image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php

      
      echo $title;
      ?>
      
    
    
      </h5>
      <p class="card-text"> </p>
      <p class='price'><?php echo $price . " kr."; ?></p>
      <div class='d-flex justify-content-between'>
      <a href="<?php echo "?page=produkt_info&product_id=" . ($randId[2]);  ?>" class="read-more">Læs mere</a>
      <a href="#" class="green">LÆG I KURV</a>
      </div>
    </div>
  </div>
  


  <!--
  <div class="card product-card shadow-sm">
    <img class="card-img-top" src="images/oel2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk rug øl</h5>
      <p class="card-text"></p>
      <p class='price'>39,95 kr</p>
      <div class='d-flex justify-content-between'>
      <a href="" class="read-more">Læs mere</a>
      <a href="#" class="green">LÆG I KURV</a>
      </div>
    </div>
  </div>
  <div class="card product-card shadow-sm">
    <img class="card-img-top" src="images/provoiant-rapsolie-citron.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk rapsolie</h5>
      <p class="card-text"></p>
      <p class='price'>59,95 kr</p>
      <div class='d-flex justify-content-between'>
      <a href="" class="read-more">Læs mere</a>
      <a href="#" class="green">LÆG I KURV</a>
      </div>
    </div>
  </div>
-->
</div>


<!-- UDVALGTE PRODUKTER -->

<!-- BACKUP CARD -->

<!--   
  
  <div class="card product-card">
    <img class="card-img-top" src="images/provoiant-rapsolie-citron.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Økologisk rapsolie</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer... <a href="" class="read-more">Læs mere</a></p>
      <p class='price'>59,95 kr</p>
      <a href="#" class="fake-btn">LÆG I KURV</a>
    </div>
  </div>
  
   -->

  <!-- BACKUP CARD -->