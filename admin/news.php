<?php
/* function read_page($db){
echo "READ PAGE<br>";

$slug = $_GET['slug'];

$sql = "SELECT * FROM pages WHERE page_slug = '$slug'";
$sqlQuery = $db->query($sql);

if($sqlQuery){
    $dbFetch = $sqlQuery->fetch_object();
}

echo "$dbFetch->page_title<br>";
echo "$dbFetch->page_content<br>";

} */


function create_news($db){
      date_default_timezone_set("Europe/Copenhagen");

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formNewsTitle'])){
            echo "Nyheds title er tom";
        }
        if(empty($_POST['formNewsContent'])){
            echo "Nyhedsbeskrivelse er tomt";
        }


 
        if(!empty($_POST['formNewsTitle']) && !empty($_POST['formNewsContent'])){
            $image_dir = 'images/';
            $tempImage = 'billede-paa-vej.jpg';
           
            //TJEKKER OM DER INDSAT NOGET I formFile
           if($_FILES['formFile']['name'] == "") {
            // No file was selected for upload, your (re)action goes here

                $fileName = $tempImage;
            } else {
                
                   //FILE UPLOAD

                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES["formFile"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $fileName = basename($_FILES["formFile"]["name"]);

                    // Check if image file is a actual image or fake image
                    if(isset($_POST["formSubmit"])) {
                        $check = getimagesize($_FILES["formFile"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".<br>";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    // Check file size
                    if ($_FILES["formFile"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    }
            }


            
            $varNewsTitle = $_POST['formNewsTitle'];
            $varNewsContent = $_POST['formNewsContent'];
            $time = date("H:i");
            $date = date("d.m.y");

            $sql = "INSERT INTO news SET
                news_title = '$varNewsTitle',
                news_content = '$varNewsContent',
                news_image = '$image_dir$fileName',
                news_time = '$time',
                news_date = '$date';
            
            ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                        echo "Nyheden er blevet oprettet<br>";
                        echo "Billedet: ". basename( $_FILES["formFile"]["name"]). " er blevet uploadet.";

                } elseif($fileName == $tempImage) {
                        echo "Nyheden er blevet oprettet<br>";
                        echo "Et imidlertidigt billede er indsat";                 
                    }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }

        }
    }

    echo "
    <h1>Tilføj Nyhed</h1>
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formNewsTitle' placeholder='Nyheds title'></input><br>
        <textarea name='formNewsContent' placeholder='Nyheds beskrivelse'></textarea><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit' value='Opret nyhed'>
    </form>
    ";
}

function update_news($db){

    $news_id = $_GET['news_id'];

    // HENT DATA
    $sql = "SELECT * FROM news WHERE news_id = '$news_id' ";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formNewsTitle'])){
            echo "Nyheds title er tom";
        }
        if(empty($_POST['formNewsContent'])){
            echo "Nyheds indhold er tom";
        }

        if(!empty($_POST['formNewsTitle']) && !empty($_POST['formNewsContent'])){
            $image_dir = 'images/';
            $tempImage = 'billede-paa-vej.jpg';
           
            //TJEKKER OM DER INDSAT NOGET I formFile
           if($_FILES['formFile']['name'] == "") {

            // No file was selected for upload, your (re)action goes here
            //Hvis ingen fil er valgt - indsæt det samme som i DB
                $fileName = $dbFetch->news_image;
                $image_dir = '';
            } else {
                
                   //FILE UPLOAD

                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES["formFile"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $fileName = basename($_FILES["formFile"]["name"]);

                    // Check if image file is a actual image or fake image
                    if(isset($_POST["formSubmit"])) {
                        $check = getimagesize($_FILES["formFile"]["tmp_name"]);
                        if($check !== false) {
                            //echo "File is an image - " . $check["mime"] . ".<br>";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        //echo "Sorry, file already exists.";
                        //$uploadOk = 0;
                    }
                    // Check file size
                    if ($_FILES["formFile"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    }
            }

            
            $varNewsTitle = $_POST['formNewsTitle'];
            $varNewsContent = $_POST['formNewsContent'];
            $time = date("H:i");
            $date = date("d.m.y");

            $sql = "UPDATE news SET
                news_title = '$varNewsTitle',
                news_content = '$varNewsContent',
                news_image = '$image_dir$fileName',
                news_time = '$time',
                news_date = '$date'
                WHERE news_id = '$news_id';
                ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                        echo "Nyheden er blevet opdateret<br>";
                        //echo "Billedet: ". basename( $_FILES["formFile"]["name"]). " er blevet uploadet.";

                } elseif($fileName == $dbFetch->news_image) {
                        echo "Nyheden er blevet opdateret<br>";                
                    }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }
    }
}

    echo "
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formNewsTitle' value='$dbFetch->news_title'</input><br>
        <textarea name='formNewsContent'>$dbFetch->news_content</textarea><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit' value='OPDATER'>
    </form>
  <img class='product-list-img rounded' src='../$dbFetch->news_image'>
    ";
}


function delete_news($db){

    $news_id = $_GET['news_id'];

    $sql = "SELECT * FROM news where news_id=$news_id";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }
    
    $target_dir = "../images/";

    if(isset($_POST['formSubmit'])){

        $sql = "DELETE FROM news Where news_id=$news_id";
        $sqlQuery = $db->query($sql);

        if($sqlQuery){
            unlink($target_dir . $dbFetch->news_image);
            echo "Nyheden er slettet!";
        }
    }else{

    echo "
    <h1>Er du sikker på, at du vil slette: " . $dbFetch->news_title . " ?</h1>
    <form method='post'>
        <input type='submit' name='formSubmit' value='SLET'>
    </form>
    ";
    }
}   

function list_news($db){
    ///////////////////////////////////////
    $sql = "SELECT * FROM news";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        //echo "<div class='text-center'><h1>Nyheds oversigt</h1></div>";
        echo "
        <table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Billede</th>
            <th scope='col'>Titel</th>
            <th scope='col'>Indhold</th>
            <th scope='col'>Dato</th>
            <th scope='col'>Opdater</th>
            <th scope='col'>Slet</th>
        </tr>
        <tr class='bg-light'>
            <td><a class='text-success' href='?page=create_news'>Tilføj nyheder</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>   
        </tr>
        </thead>
        <tbody>
        ";
    }else{
        echo "Error, couldn't run query!";
    }

    while($dbFetch = $sqlQuery->fetch_object()){
        echo "
            <tr>
                <td>$dbFetch->news_id</td>
                <td><img class='product-list-img rounded' src='../$dbFetch->news_image'></td>
                <td>$dbFetch->news_title</td>
                <td>$dbFetch->news_content</td>
                <td>$dbFetch->news_date $dbFetch->news_time</td>
                <td><a href='?page=update_news&news_id=$dbFetch->news_id'>Opdater</a></td>
                <td><a class='text-danger' href='?page=delete_news&news_id=$dbFetch->news_id'>Slet</a></td>
            </tr>
            ";
    }

    echo "


        </tbody>
        </table>
        ";





    ////////////////////////////////////
}
/* function navigation($db){
    $sql = "SELECT * FROM admin_pages";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        while($dbFetch = $sqlQuery->fetch_object()){
            echo "
                <li class='nav-item'>
                    <a class='nav-link' href='$dbFetch->page_link'>$dbFetch->page_title  
                </li>
            ";
        }
    }

}

function forside($db){
       
    include ('elements/udvalgte-produkter.php');
        include ('elements/news-section.php');
}

function produkter($db){
    
    include ('elements/product-section.php');
}

function om_os($db){
    include ('elements/om-os.php');
}

function kontakt($db){
    include ('elements/kontakt.php');
}

function produkt_info($db){
    include ('elements/product-info.php');
}

 */
?>