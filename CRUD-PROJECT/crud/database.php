<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'registration';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "ERROR: Unable to connect to MSQL <br>";
        echo "MESSAGE: ".mysql_connect_error(). "<br>";
    }

?>