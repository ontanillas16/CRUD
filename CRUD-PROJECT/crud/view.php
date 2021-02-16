<?php
    require('./read.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        table, td, th {
            padding: 15px;
            border: 1px solid black;
        }
        tr:hover{
            background-color: #e1f6ff;
        }
        th{
            background-color: #00abf0;
        }

        .editbtn{
            background-color: #4CAF50;
  border: 20px black;
  border-radius: 12px;
  color: white;
  padding: 2px 10px 0px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
        }

        .deletebtn{
            background-color: #f44336;
  border: 20px black;
  border-radius: 12px;
  color: white;
  padding: 2px 10px 0px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
        }

        .logoutbtn{
            background-color: #555555;
  border: 20px black;
  border-radius: 12px;
  color: white;
  padding: 2px 10px 0px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
        }

        h9{
            font-size: 100px;
            text-align: center;
        }


    </style>
</head>
<body>
    <div>
        <h9>Registered Users</h9><br><br>
        <table class="read-main">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>ID NUMBER</th>
            <th>COLLEGE</th>
            <th>COURSE</th>
            <th>PASSWORD</th>
            <th>ACTIONS</th>
        </tr>


        <?php while($results = mysqli_fetch_array($sqlusers)) { ?>
        <tr>
            <td><?php echo $results['id']?></td>
            <td><?php echo $results['username']?></td>
            <td><?php echo $results['email']?></td>
            <td><?php echo $results['idnumber']?></td>
            <td><?php echo $results['college']?></td>
            <td><?php echo $results['course']?></td>
            <td><?php echo $results['password']?></td>
            <td>
                <form action = "/crud/update.php" method = "post">
                    <input class="editbtn" type="submit" name="edit" value="EDIT">
                    <input type= "hidden" name="editId" value="<?php echo $results['id']?>">
                    <input type= "hidden" name="editUsername" value="<?php echo $results['username']?>">
                    <input type= "hidden" name="editEmail" value="<?php echo $results['email']?>">
                    <input type= "hidden" name="editIdnumber" value="<?php echo $results['idnumber']?>">
                    <input type= "hidden" name="editCollege" value="<?php echo $results['college']?>">
                    <input type= "hidden" name="editCourse" value="<?php echo $results['course']?>">
                    <input type= "hidden" name="editPassword" value="<?php echo $results['password']?>">
                </form>
                <br>


                <form action= "/crud/delete.php" method="post">
                    <input class="deletebtn" type= "submit" name="delete" value="DELETE">
                    <input type= "hidden" name="deleteId" value="<?php echo $results['id']?>">
                </form>
            </td>
        </tr>
        <?php } ?>
        </table>
        <br>
    </div>
        <form action="/crud/index.php" method ="post">
                <button class="logoutbtn" type="submit">Log Out</button>
        </form>

</body>
</html>