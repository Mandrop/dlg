<!-- PRODUKT SIDE -->

<?php

    $id = $_GET['id'];
    $page = $_GET['page'];

    // HENT DATA
    $sql = "SELECT * FROM products";
    $sqlQuery = $db->query($sql);

/*     if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();

    } */




?>


  <div class="container produkter">
  <h1 class='big-h1'>PRODUKTER</h1>
<div class="card-deck">
  
  <?php
//UDSKRIV PRODUKTERNE TIL SIDEN
     while($dbFetch = $sqlQuery->fetch_object()){

       // strip tags to avoid breaking any html
$string = strip_tags('$dbFetch->product_content');
if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 100);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="/this/story">Read More</a>';
}


        echo "
  <div class='card'>
    <img class='card-img-top' src='$dbFetch->product_image' alt='Card image cap'>
    <div class='card-body'>
      <h5 class='card-title'> $dbFetch->product_title </h5>
      <p class='card-text'>$string ... <a href='' class='read-more'>Læs mere</a></p>
      <p class='price'>$dbFetch->product_price kr.</p>
      <a href='' class='fake-btn'>LÆG I KURV</a>
    </div>
  </div>
        ";
    } 

  ?>

</div>

</div>


<!-- PRODUKTSIDE -->

<!-- BACKUP -->

<!-- 
  <div class="card">
    <img class="card-img-top" src="images/mel2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php //echo "$dbFetch->product_title"; ?>Økologisk hvedemel</h5>
      <p class="card-text"><?php //echo "$dbFetch->product_content"; ?>... <a href="" class="read-more">Læs mere</a></p>
      <p class='price'><?php //echo "$dbFetch->product_price"; ?> kr</p>
      <a href="#" class="fake-btn">LÆG I KURV</a>
    </div> 
    -->

<!-- BACKUP -->