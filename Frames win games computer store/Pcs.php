<?php
require_once 'process/connect.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCs</title>
    <link rel="shortcut icon" href="pc-display-horizontal.svg">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  

<head>

    <style>
  *{
        padding: 0;
        margin: 0;
        position: relative;
        box-sizing: border-box;
      }  
      
      .listing-section{
        width: 100%;
        float: left;
        padding: 1%;
        border-bottom: 0.01em solid #dddbdb;
      }
      
     .product {
        float: left;
        width: 23%;
        border-radius: 2%;
        margin: 1%;
      }
      
     .product:hover {
        box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
        -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
      }
      
      .image-box {
        width: 100%;
        overflow: hidden;
        border-radius: 2% 2% 0 0;
        border: 0.01em solid #dddbdb;

      }
      
      .images {
        height: 15em;
        background-size: cover; 
        background-position: center center; 
        background-repeat: no-repeat;
        border-radius: 2% 2% 0 0;
        transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -webkit-transition: all 1s ease;
        -o-transition: all 1s ease;
      }
      
      .images:hover {
        transform: scale(1.2);
        overflow: hidden;
        border-radius: 2%;
      }
      
          /* IMAGES */
          #image-1 {background-image: url("https://m.media-amazon.com/images/I/71cj6XdObVL._AC_SL1500_.jpg"); background-size:150px;}
      
      #image-2 {background-image: url("https://m.media-amazon.com/images/I/71JKPrhGZuL._AC_SL1000_.jpg"); background-size: 220px;}
      
      #image-3 {background-image: url("https://m.media-amazon.com/images/I/61iOuC0YJTL._AC_SL1000_.jpg"); background-size: 190px;}
      
      #image-4 {background-image: url("https://www.cyberpowersystem.co.uk/images/cs/CPEURUS/blkv2_cpb_400.png"); background-size: 190px;}
      
      #image-5 {background-image: url("#")}
      
      #image-6 {background-image: url("#")}
      
      #image-7 {background-image: url("#")}
      
      #image-8 {background-image: url("#")}
      
      #image-9 {background-image: url("#")}
      
      #image-10 {background-image: url("#")}
      
      .text-box {
        width: 100%;
        float: left;
        border: 0.01em solid #dddbdb;
        border-radius: 0 0 2% 2%;
        padding: 1em;
      }
      
      
      h2, h3 {
        float: left;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 1em;
        text-transform: uppercase;
        margin: 0.2em auto;
      }
      
      .item, .price {
        clear: left;
        width: 100%;
        text-align: center;
      }
      
      .price {
        color: Grey;
      }
      
      .description, label,button:not(.btn-outline-success,.navbar-toggler,.btn-success), input {
        float: left;
        clear: left;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        font-size: 1em;
        text-align: center;
        margin: 0.2em auto;
      }
      
     input:focus {
        outline-color: #fdf;
      }
      
     label {
        width: 60%;
      }
      
     .text-box input {
        width: 15%;
        clear: none;
      }
      
      .text-box button:not(.btn-outline-success,.navbar-toggler,.btn-success) {
        margin-top: 1em;
      }
      
   button:not(.btn-outline-success,.navbar-toggler,.btn-success) {
        padding: 2%;
        background-color: #b3dbc3;
        border: solid;
        border-radius: 2%;
        border-color: #24641e;
     }
    
    
    button:not(.btn-outline-success,.navbar-toggler,.btn-danger,.btn-success):hover {
        bottom: 0.1em;
      }
      
     button:not(.btn-outline-success,.navbar-toggler,.btn-danger,.btn-success):focus {
        outline: 0;
      }
      
     button:not(.btn-outline-success,.navbar-toggler,.btn-danger,.btn-success):active {
        bottom: 0;
        background-color: rgb(219, 173, 20);
      }
    </style>
  </head>

  <body>
      <!--Start of nav bar 
    scroll till find End's comment -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c2b2c;">
      <div class="container">
          <a class="navbar-brand" href="index.php">
            <h5 style="display:inline-block ;">
            <div style="color:rgb(0, 150,0); display:inline-block;">FRAMES</div>
            <sub style="color: rgb(0, 150,0);">win</sub>
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
      <!--End of NavBar-->

    <!--product word-->
      <div class="container">
        <div class="row my-5">
          <h1 class="text-center"  >Products</h1>
        </div>
       </div>
       <!--End of product word-->

          <!--div contain all products 
      Add products inside it-->
    <div class="listing-section">

      <!-- Start of product-->
      <div class="product">
        <div class="image-box">
          <div class="images" id="image-1"></div> <!--Go up ↑↑↑ to image in Style to Edit-->
        </div>
        <div class="text-box">
          <?php
              $query="select model_name,price from product where category_id=2 and product_id=7";
              $result=mysqli_query($conn,$query);
              $row=mysqli_fetch_assoc($result);
              
              echo '<h2 class="item">'.$row['model_name'].'</h2>';
              echo '<h3 class="price">'.$row['price'].'</h3>';
          ?>
          
          
          <button type="button" name="item-1-button" id="item-1-button">Add to Cart</button>
          <?php
          $quantity_query='select quantity from product where product_id=7';
          $result=mysqli_query($conn,$quantity_query);
          $avaliable_quant=mysqli_fetch_assoc($result);
          if($avaliable_quant['quantity']>0){
            echo '<a href="deepcoolcase.php"><button type="button" name="item-1-view"   id="item-1-view">View</button></a> ';
          }else{
            echo '<a href="deepcoolcase.php"><button disabled type="button" name="item-1-view"   id="item-1-view">Out of stock</button></a> ';
          }
          ?>
          
        </div>
      </div>
      <!--End product-->

      <!--Start product-->
      <div class="product">
        <div class="image-box">
          <div class="images" id="image-2"></div>
        </div>
        <div class="text-box">
          <h2 class="item">Gigabyte B550 AORUS ELITE AX V2</h2> 
          <h3 class="price">6,125 EGP</h3> 
         
          <button type="button" name="item-2-button" id="item-2-button">Add to Cart</button>
          <button type="button" name="item-2-view"   id="item-2-view">View</button>
        </div>
      </div>
      <!--End product-->


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-3"></div>
        </div>
        <div class="text-box">
          <h2 class="item">AWD-IT Gaming PC Bundle </h2>
          <h3 class="price">10,249 EGP</h3>
          
          <button type="button" name="item-3-button" id="item-3-button">Add to Cart</button>
          <button type="button" name="item-3-view"   id="item-3-view">View</button>
        </div>
      </div>
      <div class="product">
        <div class="image-box">
          <div class="images" id="image-4"></div>
        </div>
        <div class="text-box">
          <h2 class="item">Infinity X105 Gaming PC Bundle</h2>
          <h3 class="price">25,000 EGP</h3>
          
          <button type="button" name="item-4-button" id="item-4-button">Add to Cart</button>
          <button type="button" name="item-4-view"   id="item-4-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-5"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
      
          
          <button type="button" name="item-5-button" id="item-5-button">Add to Cart</button>
          <button type="button" name="item-5-view"   id="item-5-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-6"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
        
          <button type="button" name="item-6-button" id="item-6-button">Add to Cart</button>
          <button type="button" name="item-6-view"   id="item-6-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-7"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
           
          <button type="button" name="item-7-button" id="item-7-button">Add to Cart</button>
          <button type="button" name="item-7-view"   id="item-7-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-8"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
          
          <button type="button" name="item-8-button" id="item-8-button">Add to Cart</button>
          <button type="button" name="item-8-view"   id="item-8-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-9"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
         
          <button type="button" name="item-9-button" id="item-9-button">Add to Cart</button>
          <button type="button" name="item-9-view"   id="item-9-view">View</button>
        </div>
      </div>


      <div class="product">
        <div class="image-box">
          <div class="images" id="image-10"></div>
        </div>
        <div class="text-box">
          <h2 class="item">#</h2>
          <h3 class="price">#</h3>
          
          <button type="button" name="item-10-button" id="item-10-button">Add to Cart</button>
          <button type="button" name="item-10-view"   id="item-10-view">View</button>
        </div>
      </div>
    </div>
    
      
      
     
      </div>
  </body>
 

  
  </body>
</html>