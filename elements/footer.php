  <!-- FOOTER START -->
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
      <p> Mandag - Torsdag   09:00 - 17:30</p>
      <p>Fredag   09:00 - 18:00</p>
      <p>Lørdag - Søndag  10:00 - 13:00</p>
    </div>
  </div>
</div>

<hr class='hr-white'>

<?php
sendMessage($db)
?>
<form method='post'>
  <p class='big-paragraph'>Send os en besked</p>
  <input class='d-block' type="text" placeholder='Navn' value='<?php echo $_SESSION['form_name'];  ?>' name='formName'></input>
  <?php
    if(isset($_POST['formMessageSubmit'])){
      if(empty($_POST['formName'])){
        echo "<p class='formError'>Venligst indtast dit navn</p>";
    }
    }
    
  ?>
  <input class='d-block' type='email' placeholder='Email' value='<?php echo $_SESSION['form_email'];  ?>' name='formEmail'></input>
  <?php
    if(isset($_POST['formMessageSubmit'])){
      if(empty($_POST['formEmail'])){
        echo "<p class='formError'>Venligst indtast din email</p>";
    }
    }
    
  ?>
  <textarea class='d-block' name="formContent" placeholder='Besked' id="" cols="30" rows="10"><?php echo $_SESSION['form_content'];  ?></textarea>
  <?php
    if(isset($_POST['formMessageSubmit'])){
      if(empty($_POST['formContent'])){
        echo "<p class='formError'>Venligst skriv en besked</p>";
    }
    }
    
  ?>
  <input class='d-block submit' type="submit" value='Send' name='formMessageSubmit'>
</form>
    </footer>
 <!-- FOOTER END -->