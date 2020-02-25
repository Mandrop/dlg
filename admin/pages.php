<?php
function read_page($db){
echo "READ PAGE<br>";

$slug = $_GET['slug'];

$sql = "SELECT * FROM pages WHERE page_slug = '$slug'";
$sqlQuery = $db->query($sql);

if($sqlQuery){
    $dbFetch = $sqlQuery->fetch_object();
}

echo "$dbFetch->page_title<br>";
echo "$dbFetch->page_content<br>";

}


function create_page($db){

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formTitle'])){
            echo "Title field is empty";
        }
        if(empty($_POST['formContent'])){
            echo "Content field is empty";
        }
        if(empty($_POST['formSlug'])){
            echo "Slug field is empty";
        }

        if(!empty($_POST['formTitle']) && !empty($_POST['formContent']) && !empty($_POST['formSlug'])){

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["formFile"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $fileName = basename($_FILES["formFile"]["name"]);
            // Check if image file is a actual image or fake image
            if(isset($_POST["formSubmit"])) {
                $check = getimagesize($_FILES["formFile"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
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

            $varTitle = $_POST['formTitle'];
            $varContent = $_POST['formContent'];
            $varSlug = $_POST['formSlug'];

            $sql = "INSERT INTO pages SET
                page_title = '$varTitle',
                page_content = '$varContent',
                page_slug = '$varSlug',
                page_image = '$fileName'
                ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["formFile"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }      
    }


    echo "
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formTitle' placeholder='Title'></input><br>
        <textarea name='formContent' placeholder='Content'></textarea><br>
        <input type='text' name='formSlug' placeholder='Slug'></input><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    ";
}

function update_page($db){

    $id = $_GET['id'];

    // HENT DATA
    $sql = "SELECT * FROM pages WHERE page_id = '$id' ";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formTitle'])){
            echo "Title field is empty";
        }
        if(empty($_POST['formContent'])){
            echo "Content field is empty";
        }
        if(empty($_POST['formSlug'])){
            echo "Slug field is empty";
        }

        if(!empty($_POST['formTitle']) && !empty($_POST['formContent']) && !empty($_POST['formSlug'])){

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["formFile"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $fileName = basename($_FILES["formFile"]["name"]);
            // Check if image file is a actual image or fake image
            if(isset($_POST["formSubmit"])) {
                $check = getimagesize($_FILES["formFile"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
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

            $varTitle = $_POST['formTitle'];
            $varContent = $_POST['formContent'];
            $varSlug = $_POST['formSlug'];

            $sql = "UPDATE pages SET
                page_title = '$varTitle',
                page_content = '$varContent',
                page_slug = '$varSlug',
                page_image = '$fileName'
                WHERE page_id = '$id';
                ";

            if($db->query($sql)){
                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
                    unlink($target_dir . $dbFetch->page_image);
                    echo "The file ". basename( $_FILES["formFile"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
    }
}

    echo "
    <form method='post' enctype='multipart/form-data'>
        <input type='text' name='formTitle' value='$dbFetch->page_title'</input><br>
        <textarea name='formContent'>$dbFetch->page_content</textarea><br>
        <input type='text' name='formSlug' value='$dbFetch->page_slug'</input><br>
        <input type='file' name='formFile'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    ";
}


function delete_page($db){

    $id = $_GET['id'];

    $sql = "SELECT * FROM pages where page_id=$id";
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

function list_pages($db){
    ///////////////////////////////////////
    $sql = "SELECT * FROM pages";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        echo "<div class='text-center'><h1>Side oversigt</h1></div>";
        echo "
        <table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Titel</th>
            <th scope='col'>Indhold</th>
            <th scope='col'>Slug</th>
            <th scope='col'>Updater</th>
            <th scope='col'>Slet</th>
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
                <td>$dbFetch->page_id</td>
                <td>$dbFetch->page_title</td>
                <td>$dbFetch->page_content</td>
                <td>$dbFetch->page_slug</td>
                <td><a href='?page=update_page&id=$dbFetch->page_id'>Update</a></td>
                <td><a class='text-danger' href='?page=delete_page&id=$dbFetch->page_id'>Delete</a></td>
            </tr>
            ";
    }

    echo "
        <tr class='bg-light'>
            <td><a class='text-success' href='?page=create_page'>Tilføj side</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>   
        </tr>

        </tbody>
        </table>
        ";





    ////////////////////////////////////
}
function navigation($db){
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
        echo "DER ER HUL IGENNEM";
    include ('elements/udvalgte-produkter.php');
        include ('elements/news-section.php');
}

function produkter($db){
    echo "DER ER HUL IGENNEM";
    include ('elements/produkt-section.php');
}

function om_os($db){
    include ('elements/om-os.php');
}

function kontakt($db){
    include ('elements/kontakt.php');
}

function product_info($db){
    include ('elements/product-info.php');
}


?>