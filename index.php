<?php require_once 'php/database.php'; ?>
<?php require_once 'php/register.php'; ?>

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
    <?php
    // extract($_POST);
    // if(isset($submit)){
    //     $hash_pass=password_hash($pass,PASSWORD_DEFAULT);
    //     $verify=password_verify($cpass,$hash_pass);

    //    //all the error handling
    //     if(empty($name) ||empty($email)||empty($pass)||empty($cpass)){
    //         header('location: index.php?error=emptyfield');
    //     }else if(!$verify){
    //         echo ucwords('your password is not match with confirm password');
    //     }else{
    //         header('location:login.php');
    //     }

    // }

    // $sql='insert into users ';
    // $res=mysqli_query($conn,$sql);
    // $rowCount=mysqli_num_rows($res);
    // if($rowCount>0){
    //     while($row=mysqli_fetch_assoc($res)){
    //         echo $row['password']."<br>";
    //     }
    // }else{
    //     echo 'no result found';
    // }
    ?>
    <h1>REGISTER</h1>
    <form action="php/register.php" method="post">
        <input type="text" name="name" placeholder='first name' id="">
        <input type="email" name="email" placeholder='enter email' id="">
        <input type="password" name="pass" placeholder='enter password' id="">
        <input type="password" name="cpass" placeholder='enter confirm password' id="">
        <button type="submit" name='submit'>Sign Up</button>
        <p>
            Have an account?
            <a href="Login.php">Login</a>
        </p>
    </form>
    <!-- <p></p> -->
</body>
</html>