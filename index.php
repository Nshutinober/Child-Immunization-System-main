<?php

include "PHP/connection.php";
include "PHP/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mbarara Regional  Referral Hospital</title>
       <link rel="icon" href="IMG/coat.png" type="image/png"> 
  <link rel="apple-touch-icon" href="IMG/coat.png">  
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue|Exo">
</head>
<body>    
    <div class="wrapper">
      <ul class="menu">
        <div class="dropdown">
            <li><button class="dropbtn"><i class="fas fa-sign-in-alt"></i>Admin</button>
              <div class="dropdown-content">
                <a href="admin_login.php"><i class="fas fa-sign-in-alt" id="icon"></i>login</a>
              </div>
            </li>
        </div>
        <div class="dropdown">
            <li><button class="dropbtn"><i class="fas fa-sign-in-alt"></i>Parents</button>
              <div class="dropdown-content">
                <a href="login.php"><i class="fas fa-sign-in-alt" id="icon"></i>login</a>
                <a href="signup.php"><i class="fas fa-sign-in-alt" id="icon"></i>signup</a>
              </div>
            </li>
        </div>
        </div>
      </ul>
    </div>
        <div class="text">
            <h1>Welcome To Mbarara Regional Referal Hospital</h1>
            <h2>Child Immunization System</h2>
            <p>It's important to keep your family's immunization records
                up to date, especially for your child. <br> Child Immunization System is 
                enabled for managing your child's immunization records,
                and for sending <br> vaccination schedule reminders to you.</p>
        </div>
    <!-- <footer>--
        <div class="container">
    <center>
        <p>© 2024 Mbarara Regional Referal Hospital | All Rights Reserved </p>
    </center>
    </div>
    </footer>-->
</body>
</html>