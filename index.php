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

    <title>Banking System</title>
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
						<a class="nav-link active" aria-current="page" href="#">Home</a>
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
		<div class="s-heading">
			<h1> Wel<font color="#2F4F4F">come </font>  T<font color="#2F4F4F">o</font> Spa<font color="#2F4F4F">rks </font>Ba<font color="#2F4F4F">nk</font> </h1 >
		</div>
		<!-- Bank-Services Section -->
		<section class="bank-services">
			<div class="row service text-center">
				<div class="col-md act">
                <!--Service box container-->
                <div class="box-container">
                        <!--View Users Box-->
                        <div class="s-box"><p>
                            <div class="bar"></div>
                            <img src ="images/users-img.png" alt="users-img">
                            <h1>View Users</h1>
                            <p>All of your customers or users are partners in your mission.
                            A brand for a company is like a reputation for a person.</p>
                            <!--btn-->
                            <a href="viewusers.php" class="s-btn" >View</a>
                        </div>
                    </div>
                </div>

                		<div class="col-md act">
                 		<!--Transfer money Box-->
                    		<div class="s-box"><p>
		                   	<div class="bar"></div>
		                    <img src ="images/money.transfer.png" alt="money-transfer">
		                    <h1>Transfer Money</h1>
		                    <p>Transfering money are now easier. 
		                    Whoever thinks money doesn't bring happiness transfer it to my account.</p>
		                    <!--btn-->
                            <a href="transfermoney.php" class="s-btn" >View</a>
                        </div>
                    </div>

                   		<div class="col-md act">
                    	<!--Transaction history Box-->
                    		<div class="s-box"><p>
                        	<div class="bar"></div>
                     		<img src ="images/money-history.png" alt="money-history">
                       		<h1>Transactions</h1>
                       		<p>Now the transaction details can be secured easily. 
                       		One can view transaction history as per their convenience.</p>
                            <!--btn-->
                            <a href="transaction_history.php" class="s-btn" >View</a>
                  		</div>
            		</div>
      			</div>
      		</section>
      	</div></p>
      	<br><br><br>
		
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


