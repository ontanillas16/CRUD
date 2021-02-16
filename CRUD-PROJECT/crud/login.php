<?php
    require('./database.php');

    if(isset($_POST['username1'])){
        $uname=$_POST['username1'];
        $pass=$_POST['password1'];

        $sql="SELECT * from users WHERE username='$uname' AND password='$pass' limit 1";
        $result=mysqli_query($connection, $sql);

        if(mysqli_num_rows($result)==1){
            echo '<script>alert("Successfully Log in!")</script>';
            echo '<script>window.location.href = "/crud/view.php"</script>';
            exit();
        }
        else{
            echo '<script>alert("Invalid User")</script>';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        html, body{
    margin: 0;
    padding: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #004764;
}

.form_input{
    text-align: center;
}

.center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
    height:250px;
}

h1{
    text-align: center;
}

.cbtn{
    text-align: center;
}

</style>
</head>
<body>
    
    
<ul>
  <li><a href="Homepage.php">HOME</a></li>
  <li><a class="active" href="login.php">LOG IN</a></li>
  <li><a href="index.php">REGISTER</a></li>
</ul>
<br>

<h1>LOG IN</h1><br>
    <img src="Logo.png" class="center">
    <br>

    <div class="container">
        <form method="POST" action="#">

            <div class="form_input">
                <input type="text" name="username1" placeholder="Enter Username"/>
            </div>
            <div class="form_input">
                <input type="password" name="password1" placeholder="Enter Password"/>
            </div>
            <br>
            <div class="cbtn">
                <input type="submit" name="submit1" value="LOGIN" class="btn-login"/>
            </div>
        </form>
    </div>

</body>
</html>