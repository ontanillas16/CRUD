<?php
    require('./database.php');

    if(isset($_POST['edit'])){
        $editId = $_POST['editId'];
        $editUsername = $_POST['editUsername'];
        $editEmail = $_POST['editEmail'];
        $editIdnumber = $_POST['editIdnumber'];
        $editCollege = $_POST['editCollege'];
        $editCourse = $_POST['editCourse'];
        $editPassword = $_POST['editPassword'];
    }

    if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateUsername = $_POST['updateUsername'];
        $updateEmail = $_POST['updateEmail'];
        $updateIdnumber = $_POST['updateIdnumber'];
        $updateCollege = $_POST['updateCollege'];
        $updateCourse = $_POST['updateCourse'];
        $updatePassword = $_POST['updatePassword'];

        $queryUpdate = "UPDATE users SET username = '$updateUsername', email= '$updateEmail', idnumber = '$updateIdnumber', college = '$updateCollege', course = '$updateCourse', password = '$updatePassword' WHERE id = $updateId";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo '<script>alert("Successfully Updated!")</script>';
        echo '<script>window.location.href = "/crud/view.php"</script>';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles1.css" rel="stylesheet" type="text/css">
    <title>Crud</title>
    <style>
        p{
            float: left;
        }
        input{
            float: right;
        }

        form{
            border: 1px solid black;
            padding: 10px;
        }
        img{
            float: left;
        }
    </style>
</head>
<body>
    <img src="Logo.png" width="500" height="500">
    <br><br>
    <div class="main">
        <form class="update-main" action="/crud/update.php" method="post">
            <h3>UPDATE USER</h3>
            <p>USERNAME:  <input type="text" name="updateUsername" placeholder="Username*" value ="<?php echo $editUsername?>" required/></p>
            <p>EMAIL: <input type="text" name="updateEmail" placeholder="Email*" value ="<?php echo $editEmail?>" required/></p>
            <p>ID NUMBER:  <input type="text" name="updateIdnumber" placeholder="Id Number*" value ="<?php echo $editIdnumber?>" required/></p>
            <p>COLLEGE:  <input type="text" name="updateCollege" placeholder="College*" value ="<?php echo $editCollege?>" required/></p>
            <p>COURSE: <input type="text" name="updateCourse" placeholder="Course*" value ="<?php echo $editCourse?>" required/></p>
            <p>PASSWORD: <input type="text" name="updatePassword" placeholder="Password*" value ="<?php echo $editPassword?>" required/></p>

            <input type="submit" name="update" value="UPDATE"/>
            <input type="hidden" name="updateId" value="<?php echo $editId ?>"/>
            <button class="cancel" type="submit"> <a href="view.php">CANCEL UPDATE</a></button>
        </form>   
          
    </div>

</body>
</html>