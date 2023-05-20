<?php
    $servername="localhost";
    $username_db="root";
    $password="";
    // $database="housingadda1"; //only for vds branch change here before merging to main :)
    $database="architect";

    $conn= mysqli_connect($servername,$username_db,$password,$database);
    
    if (! $conn ) {
        die('Sorry we failed to connect!');
    }
    global $conn;


?>