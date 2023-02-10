<?php
    require "php/database.php";
    session_start(); 

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Document</title>
</head>
<body>
    <p>Hello, <?php echo $_SESSION['username'] ?></p>
    <button><a href="php/logout.php">Log Out</a></button>
    <table class="GeneratedTable">
  <thead>
    <tr>
      <th>Serial</th>
      <th>Name</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql="SELECT * FROM assets";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)){

    while($row=mysqli_fetch_assoc($res)){
    echo 
    "
        <tr>
            <td>$row[ass_id]</td>
            <td>$row[name]</td>
            <td>$row[qty]</td>
        </tr>
    ";
        }
    }    
    ?>
  </tbody>
</table>

</body>
</html>