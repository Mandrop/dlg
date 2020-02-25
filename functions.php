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
        $urlNew = $url . '?page=index.php';
        header('Location: ' . $urlNew);
    }
}
?>