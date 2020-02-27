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


function create_product($db){

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formProductTitle'])){
            echo "Produckt title er tom";
        }
        if(empty($_POST['formProductContent'])){
            echo "Produktbeskrivelse er tomt";
        }
        if(empty($_POST['formProductPrice'])){
            echo "Pris felt er tomt";
        }

 
        if(!empty($_POST['formProductTitle']) && !empty($_POST['formProductContent']) && !empty($_POST['formProductPrice'])){
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

            
            $varProductTitle = $_POST['formProductTitle'];
            $varProductContent = $_POST['formProductContent'];
            $varProductPrice = $_POST['formProductPrice'];

            $sql = "INSERT INTO products SET
                product_title = '$varProductTitle',
                product_content = '$varProductContent',
                product_price = '$varProductPrice',
                product_image = '$image_dir$fileName';
            
            ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                        echo "Produktet er blevet oprettet<br>";
                        echo "Billedet: ". basename( $_FILES["formFile"]["name"]). " er blevet uploadet.";

                } elseif($fileName == $tempImage) {
                        echo "Produktet er blevet oprettet<br>";
                        echo "Et imidlertidigt billede er indsat";                 
                    }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }

/*             if($db->query($sql)){
            if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file) || $fileName == $tempImage) {
            echo "Produktet er blevet oprettet";
            echo "Billedet: ". basename( $_FILES["formFile"]["name"]). " er blevet uploadet.";
                 } else {
        echo "Sorry, there was an error uploading your file.";
    }
            } */
        }
    }

    echo "
    <h1>Tilføj produkt</h1>
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formProductTitle' placeholder='Produkt title'></input><br>
        <textarea name='formProductContent' placeholder='Produkt beskrivelse'></textarea><br>
        <input type='text' name='formProductPrice' placeholder='Produkt pris'></input><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    ";
}

function update_product($db){

    $product_id = $_GET['produkt_id'];

    // HENT DATA
    $sql = "SELECT * FROM products WHERE product_id = '$product_id' ";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formProductTitle'])){
            echo "Title field is empty";
        }
        if(empty($_POST['formProductContent'])){
            echo "Content field is empty";
        }
        if(empty($_POST['formProductPrice'])){
            echo "Pris field is empty";
        }

        if(!empty($_POST['formProductTitle']) && !empty($_POST['formProductContent']) && !empty($_POST['formProductPrice'])){
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

            
            $varProductTitle = $_POST['formProductTitle'];
            $varProductContent = $_POST['formProductContent'];
            $varProductPrice = $_POST['formProductPrice'];

            $sql = "UPDATE products SET
                product_title = '$varProductTitle',
                product_content = '$varProductContent',
                product_price = '$varProductPrice',
                product_image = '$image_dir$fileName';
                WHERE product_id = '$product_id';
                ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                        echo "Produktet er blevet oprettet<br>";
                        echo "Billedet: ". basename( $_FILES["formFile"]["name"]). " er blevet uploadet.";

                } elseif($fileName == $tempImage) {
                        echo "Produktet er blevet oprettet<br>";
                        echo "Et imidlertidigt billede er indsat";                 
                    }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }
    }
}

    echo "
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formProductTitle' value='$dbFetch->product_title'</input><br>
        <textarea name='formContent'>$dbFetch->product_content</textarea><br>
        <input type='text' name='formProductPrice' value='$dbFetch->product_price'</input><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    ";
}


function delete_product($db){

    $product_id = $_GET['produkt_id'];

    $sql = "SELECT * FROM products where produkt_id=$product_id";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }
    
    $target_dir = "uploads/";

    if(isset($_POST['formSubmit'])){

        $sql = "DELETE FROM pages Where page_id=$id";
        $sqlQuery = $db->query($sql);

        if($sqlQuery){
            unlink($target_dir . $dbFetch->page_image);
            echo "Page deleted!";
        }
    }

    echo "
    <h1>Are your sure you want to delete page: " . $dbFetch->page_title . " ?</h1>
    <form method='post'>
        <input type='submit' name='formSubmit'>
    </form>
    ";
}   

function list_products($db){
    ///////////////////////////////////////
    $sql = "SELECT * FROM products";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        echo "<div class='text-center'><h1>Produkt oversigt</h1></div>";
        echo "
        <table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Billede</th>
            <th scope='col'>Titel</th>
            <th scope='col'>Indhold</th>
            <th scope='col'>Pris</th>
            <th scope='col'>Opdater</th>
            <th scope='col'>Slet</th>
        </tr>
        <tr class='bg-light'>
            <td><a class='text-success' href='?page=create_product'>Tilføj produkt</a></td>
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
                <td>$dbFetch->product_id</td>
                <td><img class='product-list-img rounded' src='../$dbFetch->product_image'></td>
                <td>$dbFetch->product_title</td>
                <td>$dbFetch->product_content</td>
                <td>$dbFetch->product_price</td>
                <td><a href='?page=update_product&id=$dbFetch->product_id'>Opdater</a></td>
                <td><a class='text-danger' href='?page=delete_product&id=$dbFetch->product_id'>Slet</a></td>
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