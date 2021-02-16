<?php
    require('./database.php');

    $queryusers = "SELECT * From users";
    $sqlusers = mysqli_query($connection, $queryusers);

?>