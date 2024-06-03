
<?php
require_once 'process/connect.php';
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BenQ MOBIUZ EX2510S</title>
    <link rel="shortcut icon" href="monitor-512.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
 
  <style>
    *{
          padding: 0;
          margin: 0;
          position: relative;
          box-sizing: border-box;
        }  
         
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
        
        .description, label, button:not(.carousel-control-next, .carousel-control-prev), input {
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
        
        .text-box  button:not(.carousel-control-next,.carousel-control-prev,.btn-outline-success,.navbar-toggler) {
          margin-top: 1em;
        }
        
        button:not(.carousel-control-next,.carousel-control-prev,.btn-outline-success,.navbar-toggler){
          padding: 2%;
          background-color: #b3dbc3;
          border: solid;
          border-radius: 2%;
          border-color: #24641e;
       }
      
      
       button:not(.carousel-control-next,.carousel-control-prev,.btn-outline-success,.navbar-toggler):hover {
          bottom: 0.1em;
        }
        
        button:not(.carousel-control-next,.carousel-control-prev,.btn-outline-success,.navbar-toggler):focus {
          outline: 0;
        }
        
        button:not(.carousel-control-next,.carousel-control-prev,.btn-outline-success,.navbar-toggler):active {
          bottom: 0;
          background-color: rgb(219, 173, 20);
        }

    .list-item{
        font-size: 14px;
        line-height: 20px;
    }
      </style>


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
      
    </nav>
      <!--End of NavBar---------------------------------------------------------------------------------------------------------------------------------------------------------->


      <table>
        <tr>
            <td>
      <!--Strat Carousel-->
<!-- <div style="border: solid 1px gray; margin-right: 100px;" > -->

      <div style="width:500px; height: 500px;margin-left: 150PX;margin-top: 100px;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://m.media-amazon.com/images/I/61neyqvKCbL._AC_SL1001_.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://m.media-amazon.com/images/I/51+2gG7vK-L._AC_SL1000_.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://m.media-amazon.com/images/I/61Jr5Sg8PRL._AC_SL1500_.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://m.media-amazon.com/images/I/61lJ4PwmIVL._AC_SL1000_.jpg" class="d-block w-100" alt="...">
          </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
       </div>
        <td>
            <!-- <div style="border:solid 0.1em gray ; width: 50%;" > -->
                <div   style="margin-left: 300px;" class="text-box">
                  <?php
                  $query="select model_name,price from product where category_id=1 and product_id=4";
                  $result=mysqli_query($conn,$query);
                  $row=mysqli_fetch_assoc($result);
                  
                  echo '<h2 class="item">'.$row['model_name'].'</h2>';
                  echo '<h3 class="price">'.$row['price'].'</h3>';
              ?>
                    <label for="item-1-quantity">Quantity:</label>
                    <form action="process/buy.php" method="get">
                    <input type="number" min="1" name="item-1-quantity" id="item-1-quantity" value="1">
                    <input type="submit" name="item-monitor-buy-now" value="BuyNow" id="item-1-buy-now">
                    </form>
                   
                    
                    
                </div>

    </td>
</tr></table>
</div>



<div style="margin-top: 5px;" class="text-box">
    <table>
<tr>
    <td><b>Screen:</b> 24.5 Inches</td>
 


    <td  rowspan="5" >
        <div style="border:dashed gray 0.1em ; margin-left: 800px; padding: 10px;">
        <b ><p>About this item:</p></b>
        <ul>
            <li>
                <pre class="list-item">24.5" GAMING MONITOR: 165Hz refresh rate 1ms MPRT IPS gaming monitor
        with 1920 x 1080 Full HD resolution and FreeSync Premium for smooth gameplay</pre>
            </li>
            <li>
                <pre class="list-item">IMAGE OPTIMIZATION: BenQ HDRi technology, Light Tuner and Black
        eQualizer help optimize image quality for a better gaming experience</pre>
            </li>
            <li>
                <pre class="list-item">CONVENIENCE & CONTROL: 5-Way Navigator, Scenario Mapping, and Gaming
        Quick OSD for easy control</pre>
            </li>
            <li>
                <pre class="list-item">COMFORT & CONNECTIVITY: Height/tilt adjustability and eye-care, HDMI and
        Display Port connectivity</pre>
            </li>
            <li>
                <pre class="list-item">SUPERIOR SOUND: Two 2.5W built-in speakers plus DSP (digital signal
        processor) chip with three custom sound modes</pre>
            </li>
        </ul>
        </div>
              <!--End Carousel--------------------------------------------------------------------------------------------------------------------------------------------------------->
        
        
        </td>
</tr>
<tr>
    <td><b>Resolution:</b> 1920 x 1080</td>
    
</tr>
<tr>
    <td><b>Brand:</b> BenQ</td>
    
</tr>
<tr>
    <td><b>Refresh rate:</b> 165Hz</td>

</tr>
    </table>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
 
    </body>
</html>