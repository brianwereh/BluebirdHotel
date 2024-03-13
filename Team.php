<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Team</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link rel="stylesheet" href="./admin/css/roombook.css"> -->
    <link rel="stylesheet" href="./css/team.css">
</head>

<body>
  <nav>
    <div class="logo">
      <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo">
      <p>BLUEBIRD HOTEL</p>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="Rooms.php">Rooms</a></li>
      <li><a href="Facilities.php">Facilites</a></li>
      <li><a href="Team.php">Staff</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>
<section>
    <div class="row">
        <div class="heading"><h1>≼ Our Staff ≽</h1></div>
        <div class="column">
          <div class="card">
            <img src="image/staff/roy.jpeg" alt="Roy" style="width:100%">
            <div class="container">
              <h2>ROY MAURICE</h2>
              <p class="title">MANAGER &amp; Founder</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="image/staff/noreen.jpg" alt="Nooren" style="width:100%">
            <div class="container">
              <h2>NOOREN</h2>
              <p class="title">Head Chef</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="image/staff/arek.jpg" alt="AREK" style="width:100%">
            <div class="container">
              <h2>AREK WEREH</h2>
              <p class="title">Cook</p>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="image/staff/tom.jpeg" alt="Tom" style="width:100%">
            <div class="container">
              <h2>TOM J</h2>
              <p class="title">Helper</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="image/staff/brian.jpeg" alt="Brian" style="width:100%">
            <div class="container">
              <h2>BRIAN</h2>
              <p class="title">Cleaner</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="image/staff/leonard.jpg" alt="Leonard" style="width:100%">
            <div class="container">
              <h2>LEONARD</h2>
              <p class="title">Weighter</p>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="https://tailoredathlete.co.uk/cdn/shop/files/TA-13-07-2351627_ee5cbe81-f793-4edc-adbc-6db9c07b7caf_1200x.jpg?v=1689939745" alt="Opiyo" style="width:100%">
            <div class="container">
              <h2>OPIYO</h2>
              <p class="title">Weighter</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="image/staff/caren.jpg" alt="Caren" style="width:100%">
            <div class="container">
              <h2>CAREN</h2>
              <p class="title">Cook</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://hosstile.com/cdn/shop/products/Echo_Long_Body_Tank_Front.jpg?v=1664241718&width=1080" alt="Ben Ooko" style="width:100%">
            <div class="container">
              <h2>BEN OOKO</h2>
              <p class="title">Weighter</p>
            </div>
          </div>
        </div>
    </div>
    </section>   
    <section id="contactus">
    <div class="social">
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="createdby">
      <h5> &copy; 2024 Bluebird Hotel</h5>
    </div>
  </section>
</body>
</html>