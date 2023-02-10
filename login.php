<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Asset</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="email" name="email" placeholder='enter email' id="">
        <input type="password" name="pass" placeholder='enter password' id="">
        <button type="submit" name="submit">Log In</button>
        <p>
            Don't have an account?
            <a href="index.php">Sign Up</a>
        </p>
    </form>
    <?php 
    require_once "php/database.php";
    extract($_POST);
    // if(isset($submit)){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $esql="SELECT * FROM users 
        WHERE email = '$email'";
        $result=mysqli_query($conn,$esql) or die('Query Failed.');

        if(mysqli_num_rows($result) > 0){
            while($row =mysqli_fetch_assoc($result)){

                
                if(password_verify($pass,$row['password'])){
                    // echo "password match with database";
                    $_SESSION['username']=$row['username'];
                    header("location:home.php");
                }else{
                    echo "<br>".ucwords("username and password are not match!");
                }

            }

        }else{
            echo "<br>".ucwords("username and password are not match!");
        }
       
    }
?>
</body>
</html>