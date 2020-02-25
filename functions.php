<?php
function userPage($db){

    $sql = "SELECT * FROM static_pages";
    $sqlQuery = $db->query($sql);

    while($dbFetch = $sqlQuery->fetch_object()){
        echo "
            <li class='nav-item'>
                <a class='nav-link' href='?page=$dbFetch->static_page_slug'>$dbFetch->static_page_title</a>
            </li>
        ";
    }

    $sql = "SELECT * FROM pages";
    $sqlQuery = $db->query($sql);

    while($dbFetch = $sqlQuery->fetch_object()){
        echo "
            <li class='nav-item'>
                <a class='nav-link' href='?page=$dbFetch->page_slug'>$dbFetch->page_title</a>
            </li>
        ";
    }
}
function indexRedirect(){
    $page = $_GET['page'];

    // IF ?PAGE IS FOUND IN URL
    if(!$page){
        // IF NO ?PAGE IS FOUND IN URL THEN TAKE CURRENT URL AND ADD ?PAGE=INDEX.PHP AT THE END
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $urlNew = $url . '?page=forside';
        header('Location: ' . $urlNew);
    }
}

// MESSAGE SYSTEM
function sendMessage($db){
    date_default_timezone_set("Europe/Copenhagen");

    echo date("d.m.y");
    echo  date("H:i");

    
    
    

    if(isset($_SESSION['form_name']) || $_SESSION['form_name'] == ''){
        $_SESSION['form_name'] = '';
    }
    if(isset($_SESSION['form_email']) || $_SESSION['form_email'] == ''){
        $_SESSION['form_email'] = '';
    }
    if(isset($_SESSION['form_content']) || $_SESSION['form_content'] == ''){
        $_SESSION['form_content'] = '';
    }

    if(isset($_POST['formMessageSubmit'])){

        $formName = $_POST['formName'];
        $formEmail = $_POST['formEmail'];
        $formContent = $_POST['formContent'];

        if (isset($_SESSION['form_name'])){
        }else{
            $_SESSION["form_name"] = '';
        }
        if (isset($_SESSION['form_email'])){
        }else{
            $_SESSION["form_email"] = '';
        }
        if (isset($_SESSION['form_content'])){
        }else{
            $_SESSION["form_content"] = '';
        }

   
        $_SESSION["form_name"] = $formName; 
        $_SESSION["form_email"] = $formEmail; 
        $_SESSION["form_content"] = $formContent; 

        if(!empty($_POST['formName']) && !empty($_POST['formEmail']) && !empty($_POST['formContent'])){

            $time = date("H:i");
            $date = date("d.m.y");
            


            $sql = "INSERT INTO messages SET
                message_name = '$formName',
                message_email = '$formEmail',
                message_content = '$formContent',
                message_time = '$time',
                message_date = '$date';
                ";
            
            if($db->query($sql)){
                echo "Message sent!";
            }else{
                echo "Sorry, couldn't send message";
            }


            

        }
        





        /*$sql = "INSERT INTO pages SET
                page_title = '$varTitle',
                page_content = '$varContent',
                page_slug = '$varSlug',
                page_image = '$fileName'
                ";*/
    }
}
?>