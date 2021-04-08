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

    <title>View Users </title>

    <style type="text/css">
      .s-heading h2{
        color: #576975;
        font-family: Playball;
        font-weight: 400;
        letter-spacing: 1px;
        text-shadow: 2px 2px #ddd;
        margin-bottom: 0;
        text-align: center;
        font-size: 3rem;
        margin: 1%;
}
.table{
    text-align: center;
    font-family: sans-serif;
    width: 50%;
    color: #fff;

}
 img{
          width: 5%;
          margin-bottom: 1%;
        }
@media screen and (max-width: 768px){
  .s-heading h2{
    font-size: 3rem;
    margin: 1%;
    margin-bottom: 0;
  }
  .table{
    width: 90%;

  }
  img{
            width: 10%;
            margin-bottom: 1%;
            padding: 0;
           
          }
}
    </style>

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
                        <a class="nav-link active" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Heading -->
    <div class="container-fluid">
        <div class="s-heading" >
            <h2>Tran<font color="#2F4F4F">sactions</font> </h2>
                          <center><img src="images/money-history.png" ></center>

        </div></div>
   <center> <table class="table table-dark table-stripped  table-hover ">
  <thead>
    <tr >
      <th scope="col">Sender Name</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Amount Transfered </th>
    </tr>
  </thead>

   <?php


   
            include 'config.php';

            $sql = "SELECT * from transaction";

            $query =mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query))
            {
        ?>

            <tbody>
    <tr>
      <td><?php echo $row['sender']; ?></td>
      <td><?php echo $row['receiver']; ?></td>
        <td><?php echo $row['balance']; ?></td>
    </tr>
</tbody>



                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div></center>
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
