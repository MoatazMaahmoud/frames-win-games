<?php
    session_start();
    $pageTitle = 'profile';
include "header.php";
   include 'process/connect.php';
if (isset($_SESSION['username'])) {

  $query="select fname,lname,username,email,phone,address
  from users where username='$_SESSION[username]'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


 $order_query="select o.order_id,o.quantity,o.totalcost,p.model_Name
  FROM `orders` as o,product as p
  WHERE username='$_SESSION[username]'
  and o.product_id=p.product_id";
 $order_result=mysqli_query($conn,$order_query);
$nrows=mysqli_num_rows($order_result);

    ?>
<!doctype html>
<html lang="en">
  <head>
    <style>
     footer {
        position: relative;
        height: 300px;
        width: 100%;
        background-color: white;
    }

    p.copyright {
        position: absolute;
        width: 100%;
        color: black;
        line-height: 40px;
        font-size: 0.7em;
        text-align: center;
        bottom:0;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
    <link rel="shortcut icon" href="frames-win-games-logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  </head>
  <body><!--style="background-image: url(backround.jpg) ;" -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c2b2c;">
    <div class="container">
        <a class="navbar-brand" style="margin-left:145px ;" href="index.php">
          <h5 style="display:inline-block ;">
          <div style="color:rgb(0, 150,0); display:inline-block;">FRAMES</div>
          <sub style="color: rgb(0, 150,0);">WIN</sub>
          <div style="color:rgb(0, 150,0); display:inline-block;">GAMES</div>
          
          </h5>
          <sub style="font-size:20px;font-style: italic;font-family: 'Times New Roman', Times, serif; ">Store</sub> 
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link"  href= "Pcs.php" > <img src="pc-display-horizontal.svg" alt=""> PCs</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="laptops.php"> <img src="laptop.svg" alt="Laptops"> laptops </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Monitors.php"> <img src="monitor-512.png" width="15px" height="15px" alt="Laptops"> Monitors </a>
          </li>
        
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
    <img src="638636-200.png" style="margin-right:5px ;" height="50px" width="50px">
   <?php
      if(isset($_SESSION['username'])){
     echo '<div class="btn-group" style="margin-right:40px">
       <button type="button" class="btn btn-success" style="pointer-events: none;">Welcome, '.$_SESSION['username'].'</button>
       <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
         <span class="visually-hidden">Toggle Dropdown</span>
       </button>
       <ul class="dropdown-menu">
         <li><a href="profile.php"class="dropdown-item">My Profile</a></li>

         <li><a href="process/logout.php"class="dropdown-item" style="color: red">log out</a></li>

       
       </ul>
     </div>';
        // echo '<p style="color:green">Welcome,'.$_SESSION['username'].'</p>';
  //       echo'<form action="process/logout.php" method="post">
        // <input type="Submit" value="Logout" class="btn btn-success"></form>';     <the old one if needed>
    //       echo'<form action="profile.php" method="post">
  //       <input type="Submit" value="My Profile" class="btn btn-success"></form>';
       }else{
       echo '<a href="login.php"> <button type="button" class="btn btn-danger">Login</button></a>
     <a href="signup.php"><button type="button" style="margin-left: 10px;margin-right: 150px;" class="btn btn-outline-danger">SignUp</button></a>';
    }
 ?>
  </nav>

<h1 class="text-center">My Profile</h1>

<div class="information" style="margin: 20px;">
    <div class="container">
        <!-- if we want to change the color for green -->
<!-- <div class="card text-bg-success mb-3" style="max-width: ;"> -->
<div class="card text-bg-mb-3" style="max-width: ;">
  <div class="card-header"><b>My Information</b></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">FirstName : <?php echo $row['fname'];?></p>
    <p class="card-text">LastName : <?php echo $row['lname'];?></p>
    <p class="card-text">Username : <?php echo $row['username'];?></p>
    <p class="card-text">Email : <?php echo $row['email'];?></p>
    <p class="card-text">Phone Number : <?php  echo $row['phone'];?></p>
    <p class="card-text"> Address : <?php  echo $row['address'];?></p>
  </div>
</div>
    </div>
</div>

<div class="orders" style="margin: 20px;">
    <div class="container">
        <!-- if we want to change the color for green -->
<!-- <div class="card text-bg-success mb-3" style="max-width: ;"> -->
<div class="card text-bg-mb-3" style="max-width: ;">
  <div class="card-header"><b>My Orders</b></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <table border="1">
      <tr>
        <th>
          Order_id
        </th>
        <th>
          quantity
        </th>
        <th>
          Totalcost
        </th>
        <th>
          Model_name
        </th>
      </tr>
      <?php
      
        for($i=0;$i<$nrows;$i++){
          $order_row=mysqli_fetch_assoc($order_result);
         
           echo'<tr>'.
           '<td>'.$order_row['order_id'].'</td>'.
          '<td>'.$order_row['quantity'].' </td>'.
          '<td>'.$order_row['totalcost'].' </td>'.
          '<td>'.$order_row['model_Name'].'</td>'.
           '</tr>';
          
        }
      ?>
    </table>
  </div>
</div>
    </div>
</div>
<?php
}
else{
    header('Location:login.php');
    exit();
}
?>

<footer>
    <p class="copyright">© Frames win games store 2022</p>
</footer>
    
  </body>
</html>