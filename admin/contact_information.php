<?php
function contact_information($db){

    $sql = "SELECT * FROM contact";
    $sqlQuery = $db->query($sql);
    if($dbFetch = $sqlQuery->fetch_object()){
    }else{
        echo "Couldn't fetch";
    }

    if(isset($_POST['formContactSubmit'])){

        $contactName = $_POST['formContactName'];
        $contactStreet = $_POST['formContactStreet'];
        $contactCityZip = $_POST['formContactCityZip'];
        $contactPhone = $_POST['formContactPhone'];
        $contactEmail = $_POST['formContactEmail'];
        $contactMonday = $_POST['formContactMonday'];
        $contactTuesday = $_POST['formContactTuesday'];
        $contactWednesday = $_POST['formContactWednesday'];
        $contactThursday = $_POST['formContactThursday'];
        $contactFriday = $_POST['formContactFriday'];
        $contactSaturday = $_POST['formContactSaturday'];
        $contactSunday = $_POST['formContactSunday'];
        

        $sql = "UPDATE contact SET
        contact_shop_name = '$contactName',
        contact_street = '$contactStreet',
        contact_city_and_zip = '$contactCityZip',
        contact_phone = '$contactPhone',
        contact_email = '$contactEmail',
        contact_monday = '$contactMonday',
        contact_tuesday= '$contactTuesday',
        contact_wednesday = '$contactWednesday',
        contact_thursday = '$contactThursday',
        contact_friday = '$contactFriday',
        contact_saturday = '$contactSaturday',
        contact_sunday = '$contactSunday';
        ";

        $sqlQuery = $db->query($sql);
        
        if($sqlQuery){
            echo "Ændringerne er gemt";
            header("Refresh:0");
            
        }else{
            echo mysqli_error($db);
            echo "Kunne ikke gemme ændringer";
        }

    }

    echo "<div class='text-center'><h1>Kontaktinformationer</h1></div>";
    echo "
    <form method='post'>

    <div class='form-group row'>
      <div class='col-sm-6'>
        <input type='text' name='formContactName' class='form-control' id='colFormLabel' placeholder='Butiksnavn' value='$dbFetch->contact_shop_name'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactStreet' class='form-control' id='colFormLabel' placeholder='Gadenavn' value='$dbFetch->contact_street'>
      </div>
    </div>

    


    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactCityZip' class='form-control' id='colFormLabel' placeholder='By og postnummer. F.eks. København 1050' value='$dbFetch->contact_city_and_zip'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactPhone' class='form-control' id='colFormLabel' placeholder='Telefonnummer' value='$dbFetch->contact_phone'>
      </div>
    </div>

    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='email' name='formContactEmail' class='form-control' id='colFormLabel' placeholder='Email' value='$dbFetch->contact_email'>
      </div>
    </div>

    <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactMonday' class='form-control' id='colFormLabel' placeholder='Mandag F.eks. 09:00 - 17:30' value='$dbFetch->contact_monday'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactTuesday' class='form-control' id='colFormLabel' placeholder='Tirsdag F.eks. 09:00 - 17:30' value='$dbFetch->contact_tuesday'>
      </div>
    </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactWednesday' class='form-control' id='colFormLabel' placeholder='Onsdag F.eks. 09:00 - 17:30' value='$dbFetch->contact_wednesday'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactThursday' class='form-control' id='colFormLabel' placeholder='Torsdag F.eks. 09:00 - 17:30' value='$dbFetch->contact_thursday'>
      </div>
      </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactFriday' class='form-control' id='colFormLabel' placeholder='Fredag F.eks. 09:00 - 17:30' value='$dbFetch->contact_friday'>
      </div>
      <div class='col-sm-6'>
        <input type='text' name='formContactSaturday' class='form-control' id='colFormLabel' placeholder='Lørdag F.eks. 09:00 - 17:30' value='$dbFetch->contact_saturday'>
      </div>
      </div>

      <div class='form-group row'>
      <!-- <label for='colFormLabel' class='col-sm-2 col-form-label'>Email</label>-->
      <div class='col-sm-6'>
        <input type='text' name='formContactSunday' class='form-control' id='colFormLabel' placeholder='Søndag F.eks. 09:00 - 17:30' value='$dbFetch->contact_sunday'>
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

