<?php
require_once 'connect.php';

if(isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $check_qurey="select * from users where username='$uname';";

$result=mysqli_query($conn,$check_qurey);
$row=mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count==1) {
        if($pass==$row["password"]){
            session_start();
            $_SESSION['username'] = $row["username"];
            header("Location: ../index.php");

        }else {
            echo "Your Username or Password is invalid";
        }
       
    } else {
        echo "Your Username or Password is invalid";
    }
} else {
    echo "Please insert Username and Password";
}