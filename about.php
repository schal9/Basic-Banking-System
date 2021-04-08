<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playball">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
      .s-heading h1{
        color: #576975;
        font-family: Playball;
        font-weight: 400;
        letter-spacing: 1px;
        text-shadow: 2px 2px #ddd;
        margin-bottom: 0;
        text-align: center;
        font-size: 3rem;
        margin: 2%;
        }
      .profile-card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 400px;
        margin-left: 36%;
        text-align: center;
        font-family: Times New Roman;
        box-sizing: border-box;
        position: absolute;
        margin-top: -2%;

      } 
      .profile-card p{
        color:rgba(85,105,117,0.9);
        text-align: center;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 16px;
      }
      .profile-card h2{
        color:  #19334d;
      }
      .profile-card a {
        text-decoration: none;
        font-size: 22px;
        color:  #19334d; 
        padding: 10px;
      }
      @media screen and (max-width: 768px){
        .profile-card{
          margin-bottom: 30%;
          position: absolute;
                  margin-left: 11%;


        }
         .s-heading h1{
   
         margin-top: 3%;
         margin-bottom: 0;
  }
      }
    </style>
    <title>About Me</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand m-1" href="#"><h1 class="fa fa-bank">  &nbsp;Sparks Banking System</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Heading -->
  <div class="container-fluid">
    <div class="s-heading">
      <h1> Ab<font color="#2F4F4F">out </font>  M<font color="#2F4F4F">e</font></h1 >
    </div><br>
    
<div class="profile-card">
  <br><img src="images/avatar.png" alt="avatar" style="width:20%;border-radius: 50%">
  <h2>Siddhi Mistry</h2>
  <p> Sincere, perseverant and looking further for more opportunities and experiences. I have completed my Diploma in Computer Engineering with first class distinction and pursuing B.Tech in Computer Science & Engineering.</p>
  <div style="margin: 24px 0;">
    <a href="https://github.com/schal9"><i class="fa fa-github"></i></a>  
    <a href="https://www.linkedin.com/in/siddhimistry/"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-twitter"></i></a> 
  </div>
</div></div>

<!-- Footer -->
        <div class="footer">
          <p style="margin-top: 0.5%"><i class="fa fa-phone">&nbsp;(656) 656-6565</i> <br><i class="fa fa-envelope">&nbsp;sparksbanking@gmail.com</i><br>&copy; Copyright 2021 | Sparks Banking System<br></p>
        </div>

        <!-- Script for navbar -->
        <script>
          function dropdownMenu(){
            var x = document.getElementById("dropdownClick");
            if(x.className === "topnav"){
              x.className += " responsive"
            }
          }
        </script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>


