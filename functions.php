<?php
function userPage($db){


    $sql = "SELECT * FROM pages";
    $sqlQuery = $db->query($sql);

    while($dbFetch = $sqlQuery->fetch_object()){
        echo "
            <li class='nav-item'>
                <a class='nav-link' href='$dbFetch->page_slug'>$dbFetch->page_title</a>
            </li>
        ";
    }
}
?>