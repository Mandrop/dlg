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
?>