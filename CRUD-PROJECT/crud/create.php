<?php
    require('./database.php');

    if(isset($_POST ['create'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $idnumber = $_POST['idnumber'];
        $college = $_POST['college'];
        $course = $_POST['course'];
        $password = $_POST['password'];

        $queryCreate = "INSERT INTO users VALUES (null, '$username', '$email', '$idnumber', '$college', '$course','$password')";
        $sqlCreate = mysqli_query($connection, $queryCreate);

        echo '<script>alert("Successfully Created!")</script>';
        echo '<script>window.location.href = "/crud/view.php"</script>';
    }
    else{
        echo '<script>window.location.href = "/crud/view.php"</script>';
    }


?>