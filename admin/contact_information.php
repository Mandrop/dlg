<?php
function contact_information(){

    echo "<div class='text-center'><h1>Kontaktinformationer</h1></div>";
    echo "
    <form method='post'>

    <div class='form-group row'>
      <div class='col-sm-6'>
        <input type='text' name='formContactName' class='form-control' id='colFormLabel' placeholder='Butiksnavn'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactStreet' class='form-control' id='colFormLabel' placeholder='Gadenavn'>
      </div>
    </div>

    


    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactCityZip' class='form-control' id='colFormLabel' placeholder='By og postnummer. F.eks. København 1050'>
      </div>
      <div class='col-sm-6'>
        <input type='number' name='formContactPhone' class='form-control' id='colFormLabel' placeholder='Telefonnummer'>
      </div>
    </div>

    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='email' name='formContactEmail' class='form-control' id='colFormLabel' placeholder='Email'>
      </div>
    </div>

    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactMonday' class='form-control' id='colFormLabel' placeholder='Mandag F.eks. 09:00 - 17:30'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactTuesday' class='form-control' id='colFormLabel' placeholder='Tirsdag F.eks. 09:00 - 17:30'>
      </div>
    </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactWednesday' class='form-control' id='colFormLabel' placeholder='Onsdag F.eks. 09:00 - 17:30'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactThursday' class='form-control' id='colFormLabel' placeholder='Torsdag F.eks. 09:00 - 17:30'>
      </div>
      </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactFriday' class='form-control' id='colFormLabel' placeholder='Fredag F.eks. 09:00 - 17:30'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactSaturday' class='form-control' id='colFormLabel' placeholder='Lørdag F.eks. 09:00 - 17:30'>
      </div>
      </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactSunday' class='form-control' id='colFormLabel' placeholder='Søndag F.eks. 09:00 - 17:30'>
      </div>
      </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-12'>
        <input type='submit' name='formContactSubmit' class='form-control' id='colFormLabel' value='Gem ændringer'>
      </div>
      </div>
    </div>    
  </form>
    
    
    
    
    
    ";
    
    

}

?>

