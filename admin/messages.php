<?php
function beskeder($db){
    $sql = "SELECT * FROM messages";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        //echo "<div class='text-center'><h1>Beskeder</h1></div>";
        echo "
        <table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>Navn</th>
            <th scope='col'>Email</th>
            <th scope='col'>Dato</th>
            <th scope='col'>Læs</th>
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
                <td>$dbFetch->message_name</td>
                <td>$dbFetch->message_email</td>
                <td>$dbFetch->message_date $dbFetch->message_time</td>
                <td><a href='?page=read_message&id=$dbFetch->message_id'>Læs</a></td>
                <td><a class='text-danger' href='?page=delete_message&id=$dbFetch->message_id'>Slet</a></td>
            </tr>
            ";
    }

    echo "
        </tbody>
        </table>
        ";
    ////////////////////////////////////
}

function read_message($db){

    $id = $_GET['id'];

    $sql = "SELECT * FROM messages WHERE message_id = '$id' ";
    $sqlQuery = $db->query($sql);
    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }else{
        echo "Couldnt fetch";
    }

    echo $dbFetch->message_content;
}

function delete_message($db){

    $id = $_GET['id'];

    $sql = "SELECT * FROM messages WHERE message_id = '$id' ";
    $sqlQuery = $db->query($sql);
    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }else{
        echo "Couldnt fetch";
    }

    if(isset($_POST['formDeleteSubmit'])){

    $sql = "DELETE FROM messages Where message_id=$id";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        echo "<h3>Besked slettet</h3>";
        header( "refresh:1;url=?page=beskeder" );
    }
    }



    echo "
    <h3>Er du sikker på at du gerne vil slette beskeden fra: " . $dbFetch->message_name . " ?</h3>
    <form method='post'>
        <input type='submit' name='formDeleteSubmit'>
    </form>
    ";

}


?>