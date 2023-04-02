<?php
    $host = "localhost";
    $user = "***";
    $password = '***';
    $db_name = "compia";
    //connection to the data is establshed here
    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>





