<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      * {
        padding: 0;
        margin: 0;
        position: relative;
        box-sizing: border-box;
      }
      /* Full-width input fields */

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }

      input[type="text"]:focus,
      input[type="password"]:focus {
        background-color: #ddd;
        outline: none;
      }

      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }

      /*button {
  background-color:darkgrey; 
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}*/
      .signupbtn {
        background-color: darkgrey;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      button:hover {
        opacity: 1;
        background-color: #04aa6d;
        color: white;
      }

      /* Float cancel and signup buttons and add an equal width */
      .cancelbtn,
      .signupbtn {
        float: left;
        width: 50%;
      }

      /* Add padding to container elements */
      .container {
        padding: 16px;
      }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link rel="shortcut icon" href="638636-200.png" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!--style="background-image: url(backround.jpg) ;" -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #2c2b2c"
    >
      <div class="container">
        <a class="navbar-brand" style="margin-left: 145px" href="index.php">
          <h5 style="display: inline-block">
            <div style="color: rgb(0, 150, 0); display: inline-block">
              FRAMES
            </div>
            <sub style="color: rgb(0, 150, 0)">WIN</sub>
            <div style="color: rgb(0, 150, 0); display: inline-block">
              GAMES
            </div>
          </h5>
          <sub
            style="
              font-size: 20px;
              font-style: italic;
              font-family: 'Times New Roman', Times, serif;
            "
            >Store</sub
          >
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
      <img
        src="638636-200.png"
        style="margin-right: 5px"
        height="50px"
        width="50px"
      />
      <a href="login.php">
        <button type="button" class="btn btn-danger">Login</button></a
      >
      <a href="signup.php"
        ><button
          type="button"
          style="margin-left: 10px; margin-right: 150px"
          class="btn btn-outline-danger"
        >
          SignUp
        </button></a
      >
    </nav>

    <form action="process/signupProc.php" method="post" id="signup-form">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr />
        <table>
          <tr>
            <td>
              <label for=""><b>FirstName</b></label>
              <input
                style="width: 100%" class="form-control"
                type="text" 
                placeholder="Enter FirstName"
                name="fname"
                id="f-name"
                required
              />
              <p id="fname-check" style="color: red"></p>
            </td>

            <td>
              <label style="margin-left: 10px" for=""><b>LastName</b></label>
              <input
                style="margin-left: 10px" class="form-control"
                type="text"
                placeholder="Enter LastName"
                name="lname"
                id="l-name"
                required
              />
              <p id="lname-check" style="color: red"></p>
            </td>
          </tr>
          <tr>
            <td>
              <label for=""><b>Username</b></label>
              <input
                type="text" class="form-control"
                placeholder="e.g username78"
                name="uname"
                id="user-name"
                required
              />
              <p id="user-check" style="color: red"></p>
            </td>

            <td>
              <label style="margin-left: 10px" for=""
                ><b>Phone number</b></label
              >
              <input
                style="margin-left: 10px" class="form-control"
                type="text"
                placeholder="e.g 999 999 9999"
                name="phoneNumber"
                id="phone-no"
                required
              />
              <p id="phone-check" style="color: red"></p>
            </td>
          </tr>
        </table>
        <label for=""><b>Email</b></label>
        <input
          type="text" class="form-control"
          placeholder="e.g. example56@example.com"
          name="email"
          id="mail"
          required
        />
        <p id="mail-check" style="color: red"></p>
        <label for=""><b>Password</b></label>
        <input
          type="password" class="form-control"
          id="pass"
          placeholder="Enter Password"
          name="pass"
          required
        />
        <p id="pass-check" style="color: red"></p>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input
          type="password" class="form-control"
          id="repass"
          placeholder="Repeat Password"
          name="repass"
          required
        />
        <p id="repass-check" style="color: red"></p>
        <label for=""><b>Address</b></label>
        <input
          type="text" class="form-control"
          placeholder="e.g 6 streetname st.cityname.countryname"
          name="address"
          id="address"
          required
        />
        <p id="address-check" style="color: red"></p>
       
        <p>
          By creating an account you agree to our
          <a href="#" style="color: dodgerblue">Terms & Privacy</a>.
        </p>

        <div>
          <input name="signUp" type="submit" class="signupbtn">Sign Up</input>
        </div>
      </div>
    </form>
  
    <script type="text/javascript">
      //check when submitting if there is anything wrong
      let flags = {
        Fname: 0,
        Lname: 0,
        Username: 0,
        Phonenumber: 0,
        Email: 0,
        Pass: 0,
        Repass: 0,
        Address: 0,
      };
      document.getElementById("signup-form").onsubmit = function () {
        if (
          flags["Fname"] != 0 ||
          flags["Lname"] != 0 ||
          flags["Username"] != 0 ||
          flags["Phonenumber"] != 0 ||
          flags["Email"] != 0 ||
          flags["Pass"] != 0 ||
          flags["Repass"] != 0 ||
          flags["Address"] != 0
        ) {
          alert("PLEASE CHECK THE ERROR AND FILL THE FORM PROPERLY!");
          return false;
        } else {
          return true;
        }
      };

      document.getElementById("f-name").onchange = function () {
        var fname = document.getElementById("f-name").value;
        var fname_check = document.getElementById("fname-check");
        var nREGEX = /^[a-zA-Z]{3,}$/;
        var nResult = nREGEX.test(fname);
        if (nResult == false) {
          fname_check.innerHTML = "too few characters";
          flags["Fname"] += 1;
        } else {
          fname_check.innerHTML = "";
          flags["Fname"] = 0;
        }
      };
      document.getElementById("l-name").onchange = function () {
        var lname = document.getElementById("l-name").value;
        var lname_check = document.getElementById("lname-check");
        var nREGEX = /^[a-zA-Z]{3,}$/;
        var nResult = nREGEX.test(lname);
        if (nResult == false) {
          lname_check.innerHTML = "too few characters";
          flags["Lname"] += 1;
        } else {
          lname_check.innerHTML = "";
          flags["Lname"] = 0;
        }
      };
      document.getElementById("user-name").onchange = function () {
        var username = document.getElementById("user-name").value;
        var user_check = document.getElementById("user-check");
        var nREGEX = /^[a-zA-Z]{3,}[0-9]{2,}$/;
        var nResult = nREGEX.test(username);
        if (nResult == false) {
          user_check.innerHTML = "Please enter the right formula";
          flags["Username"] += 1;
        } else {
          user_check.innerHTML = "";
          flags["Username"] = 0;
        }
      };
      document.getElementById("phone-no").onchange = function () {
        var phoneno = document.getElementById("phone-no").value;
        var phone_check = document.getElementById("phone-check");
        var nREGEX = /^\d{3}\s\d{3}\s\d{4}$/;
        var nResult = nREGEX.test(phoneno);
        if (nResult == false) {
          phone_check.innerHTML = "Please enter the right formula";
          flags["Phonenumber"] += 1;
        } else {
          phone_check.innerHTML = "";
          flags["Phonenumber"] = 0;
        }
      };
      document.getElementById("mail").onchange = function () {
        var mail = document.getElementById("mail").value;
        var mail_check = document.getElementById("mail-check");
        var nREGEX = /^[a-zA-Z0-9_\.]{2,}@[a-zA-Z]+\.[a-zA-Z]+$/;
        var nResult = nREGEX.test(mail);
        if (nResult == false) {
          mail_check.innerHTML = "Please enter the right formula";
          flags["Email"] += 1;
        } else {
          mail_check.innerHTML = "";
          flags["Email"] = 0;
        }
      };

      document.getElementById("pass").onchange = function () {
        var pass = document.getElementById("pass").value;
        var pass_check = document.getElementById("pass-check");
        var nREGEX = /^[a-zA-Z$_\.@0-9]{8,}$/;
        var nResult = nREGEX.test(pass);
        if (nResult == false) {
          pass_check.innerHTML = "Password is too weak";
          flags["Pass"] += 1;
        } else {
          pass_check.innerHTML = "";
          flags["Pass"] = 0;
        }
      };
      document.getElementById("repass").onchange = function () {
        var pass = document.getElementById("pass").value;
        var rep = document.getElementById("repass").value;
        var repass_check = document.getElementById("repass-check");
        if (rep != pass) {
          repass_check.innerHTML = "not matching";
          flags["Repass"] += 1;
        } else {
          repass_check.innerHTML = "";
          flags["Repass"] = 0;
        }
      };
      document.getElementById("address").onchange = function () {
        var address = document.getElementById("address").value;
        var address_check = document.getElementById("address-check");
        var nREGEX =
          /^[0-9]{1,}\s[a-zA-Z]{3,}\sst\.[a-zA-Z]{3,}\.[a-zA-Z]{3,}$/;
        var nResult = nREGEX.test(address);
        if (nResult == false) {
          address_check.innerHTML = "Wrong Formula";
          flags["Address"] += 1;
        } else {
          address_check.innerHTML = "";
          flags["Address"] = 0;
        }
      };
    </script>
  </body>
</html>
