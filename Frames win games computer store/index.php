<?php
require_once 'process/connect.php';
session_start();

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
    <title>Frames WIn Games</title>
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
     <button type="button" class="btn btn-success" ><B>Welcome, '.$_SESSION['username'].'</b></button>
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

  <div class="container">
    <div class="row my-5">
      <h1 class="text-center"  >Featured Products</h1>
    </div>
   </div>
  <!--CAROUSEL--------------------------------------------------------------------------------------------->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://image.benq.com/is/image/benqco/gaming-product-kv-2560?$ResponsivePreset$" class="d-block w-100" alt="image_1">
        <div  class="carousel-caption text-start">
            <h1>BenQ MOBIUZ </h5>
            <p class="lead">24.5" GAMING MONITOR: 165Hz refresh rate 1ms MPRT IPS gaming monitor</p>
           <a href="BenQ-view.html"><button type="button" class="btn btn-large btn-primary shadow" href="">Shop now</button></a> 
        </div>
      </div>
      <div class="carousel-item ">
        <img src="pc.jpg" class="d-block w-100" alt="image_2">
        <div  class="carousel-caption text-start">
            <h1>DEEPCOOL MATREXX</h5>
            <p class="lead">Intel I5 12400F 18MB Cash LGA1700</p>
           <a href="deepcoolcase.html"><button type="button" class="btn btn-large btn-primary shadow" href="">Shop now</button></a> 
        </div>
      </div>
      <div class="carousel-item ">
        <img src="lap.jpg" class="d-block w-100" alt="image_3">
        <div  class="carousel-caption text-start">
            <h1>IdeaPad Gaming</h5>
            <p class="lead">8GB 3200 MHz DDR4 RAM memory and 256GB M.2 PCIe SSD storage</p>
           <a href="lenovolaptop.html"><button type="button" class="btn btn-large btn-primary shadow" href="">Shop now</button></a> 
        </div>
      </div>

 
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <footer>
    <p class="copyright">© Frames win games store 2022</p>
</footer>
    
  </body>
</html>