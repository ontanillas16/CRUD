<?php
require('./database.php');

if(isset($_POST ['delete'])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM users WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo '<script>alert("Successfully Deleted!")</script>';
    echo '<script>window.location.href = "/crud/view.php"</script>';
}
else{
    echo '<script>window.location.href = "/crud/view.php"</script>';
}

?>