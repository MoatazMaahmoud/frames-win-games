<?php

require_once 'connect.php';
if(isset($_POST['signUp'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass= $_POST['pass'];
    $phonenumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $insert_query = "INSERT INTO users 
    VALUES ('$fname','$lname','$uname','$email','$pass','$phonenumber', '$address') ";
    $check_qurey="select * from users
    where email='$email' or username='$uname'";
    $result=mysqli_query($conn,$check_qurey);
    $nrows=mysqli_num_rows($result);
     if($nrows==0){
        mysqli_query($conn,$insert_query);
        header("Location:../login.php");
    } else {
       $row=mysqli_fetch_assoc($result);
       if($row['email']==$email){
        echo'This email already exists';
        echo'<br>';
       }
       if($row['username']==$uname){
        echo'This username already exists';
       }
        
    }
} else {
    echo "404 not found";
}

?>