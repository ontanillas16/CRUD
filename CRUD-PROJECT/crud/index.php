<?php
    require('./read.php');
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" type="text/css">
        <title>Crud</title>
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

.center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
    height:250px;
}


</style>
    </head>
    <body>
    <ul>
  <li><a href="Homepage.php">HOME</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a class="active" href="index.php">REGISTER</a></li>
</ul>
<br>

<img src="Logo.png" class="center">


        <div class="main">
        
            <form class="create-main" action="/crud/create.php" method="post">
                <h3>CREATE USER</h3>

                <input type="text" name="username" placeholder="Username*" required/>
                <input type="text" name="email" placeholder="email*" required/>
                <input type="text" name="idnumber" placeholder="ID Number" required/>
                <input type="text" name="college" placeholder="College*" required/>
                <input type="text" name="course" placeholder="Course*" required/>
                <input type="password" name="password" placeholder="Password*" required/><br>
                
                <input type="submit" name="create" value="CREATE"/>
            </form>        
        </div>

    </body>
    </html>