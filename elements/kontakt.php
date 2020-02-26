<!-- KONTAKT -->
<?php
$sql = "SELECT * FROM contact";
$sqlQuery = $db->query($sql);
if($dbFetch = $sqlQuery->fetch_object()){
}

?>
<div class="jumbotron jumbotron-fluid bg-white shadow-sm">
  <div class="container d-flex flex-column align-items-center">
    <h1 class="display-4 mb-5">KONTAKT</h1>
    <div class="container d-flex align-items-center align-items-md-start justify-content-md-center flex-column flex-md-row ">
        <section  class="mr-4 p-4 text-center text-md-left">
        <h2>Adresse</h2>
        <p class="font-weight-light">
        <?php echo $dbFetch->contact_shop_name ?><br>
        <?php echo $dbFetch->contact_street ?><br>
        <?php echo $dbFetch->contact_city_and_zip ?></p>

        <h2>Kontakt</h2>
        <p class="font-weight-light">
        +45 <?php echo $dbFetch->contact_phone ?><br>
        <?php echo $dbFetch->contact_email ?></p>

        <h2>Åbningstider</h2>
        <div class="d-flex">
        <div class="mr-5">
        <p class="font-weight-light">
        Mandag: <br>
        Tirsdag: <br>
        Onsdag: <br>
        Torsdag: <br>
        Fredag: <br>
        Lørdag: <br>
        Søndag: <br>
        </p>
        </div>

        <div>
        <p class="font-weight-light">
        <?php echo $dbFetch->contact_monday ?><br>
        <?php echo $dbFetch->contact_tuesday ?><br>
        <?php echo $dbFetch->contact_wednesday ?><br>
        <?php echo $dbFetch->contact_thursday ?><br>
        <?php echo $dbFetch->contact_friday ?><br>
        <?php echo $dbFetch->contact_saturday ?><br>
        <?php echo $dbFetch->contact_sunday ?><br>
        </p>
        </div>
</div>



    
    </section>
<div>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d141175.36819564193!2d9.168949477084226!3d56.43562338301524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464bdaa13b836803%3A0x71bd363fc749b3c7!2s8800%20Viborg!5e0!3m2!1sda!2sdk!4v1582195117956!5m2!1sda!2sdk" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
    
    </div>

  </div>
</div>

<!-- KONTAKT -->