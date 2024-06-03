<!doctype html>
<html lang="en">
  <head>
    <style>
        .login-container{
            width: 300px; 
            height: 300px; 
            background-color: aliceblue;
            margin: auto;
            margin-top:200px ;
            box-shadow: 2px 2px #f1eeee;
        }
        .form{
            text-align: center;
            padding-top: 50px;
        }
        .login-btn{
            margin-left: 120px;
            margin-top: 20px;
            background-color: white;
        }
        .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;  
  text-align: center;
}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="638636-200.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
  </head>
  <body style="background-color:#CDCDCD ;" >
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
    <a href="login.php"> <button type="button" class="btn btn-danger">Login</button></a>
    <a href="signup.php"><button type="button" style="margin-left: 10px;margin-right: 150px;" class="btn btn-outline-danger">SignUp</button></a>
  </nav>



 

  <div class="login-container">
    
    
        <form action="process/loginProc.php" method="post" >
            <div class="form">
                <p style="font-family:'Times New Roman', Times, serif; 
                font-style:bold; 
                font-size: 30px;">LOGIN</p>
                <input name="uname" required style="border:none;"   type="text" placeholder="username">
                <input name="pass" required style="border:none;" type="password" placeholder="password">
                
            </div>
            
            <input name="login" type="submit" class="btn btn-outline-success login-btn" value="Login"></input>
            <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        </form>
  </div>

 
  </body>
</html>