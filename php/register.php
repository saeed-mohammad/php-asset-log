
<?php
require_once "database.php";
    extract($_POST);
    if(isset($submit)){
        $hash_pass=password_hash($pass,PASSWORD_DEFAULT);
        $verify=password_verify($cpass,$hash_pass);

       //all the error handling
        if(empty($name) ||empty($email)||empty($pass)||empty($cpass)){
            header('location: ../index.html?error=emptyfield');
        }else if(!$verify){
            // echo ucwords('your password is not match with confirm password');
            $errpass= ucwords('your password is not match with confirm password');
            // return $errpass;
        }else{

            $sql="INSERT INTO users(username,email,password)
             VALUES ('$name','$email','$hash_pass')";
            if ($conn->query($sql) === TRUE) {
                header('location:../login.php');
              } else {
                echo "Error: " . $sql . "<br><br>" . $conn->error;
              }
        }

    }

    ?>