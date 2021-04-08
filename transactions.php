<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from view_users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from view_users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  
 if($amnt > $sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  
        echo '</script>';
    }

     else if($amnt == 0){
         echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
    </script>";
     }
    else {

      
        $newCredit = $sql1['balance'] - $amnt;
        $sql = "UPDATE view_users set balance=$newCredit where id=$from";
        mysqli_query($conn,$sql);



        $newCredit = $sql2['balance'] + $amnt;
        $sql = "UPDATE view_users set balance=$newCredit where id=$to";
        mysqli_query($conn,$sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction (`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amnt')";
        $qry=mysqli_query($conn,$sql);
        if($qry){
           echo "<script type='text/javascript'>
                    alert('Transaction Successfull!');
                    window.location='transaction_history.php';
                </script>";
        }
        $newCredit= 0;
        $amnt =0;
    }

}
?>

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
    <link rel="stylesheet" type="text/css" href="transact.css">

    <title>Transaction</title>

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
        img{
          width: 5%;
        }
        @media screen and (max-width: 768px){
          .s-heading h2{
            font-size: 2rem;
            margin: 1%;
          }
          img{
            width: 10%;
            margin-bottom: 0;
            padding: 0;
            margin-bottom: -1%;
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

            <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
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
      <h2>Ma<font color="#2F4F4F">ke</font> Trans<font color="#2F4F4F">action </font>
              <center><img src="images/money.transfer.png" ></center>

    </div></h2>

         


  <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  view_users where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $row=mysqli_fetch_array($query);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br/>
        

        
            <table class="details" id="inset">
                <tr>
                  
                    <td>Transfer From</td>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <tr>
                    
                    <td>Email</td>
                    <td><?php echo $row['email'] ?></td>
                </tr>
                <tr>    
                    <td>Balance</td>
                    <td><?php echo $row['balance'] ?></td>
                </tr>
                
           <tr><td>
        
        <center><label>Transfer To</label></center></td>
        <td>
        <select class=" form-control"   name="to" style="margin-bottom:2%;" required>
            <option value="" disabled selected >Choose </option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM view_users where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($row = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $row['id'];?>" >

                    <?php echo $row['name'] ;?>
                   (Balance: <?php echo $row['balance'] ;?>)
                  

                </option>
            <?php
                }
            ?>
        </select></td></tr>
        <tr><td>
            <label>Amount</label></td>
            <td><input type="number" id="amm" class="form-control" name="amount" min="0" placeholder="Enter Amount"  required  /></td></tr></table>
                <div class="text-center btn3" >
            <button class="btn btn-warning" name="submit" type="submit" id="myBtn" >Transfer Money</button> 
    
            </div></center>
            
            
        </form>
    </div>
    <center><div >
  
</div></center><br>
    <center><div >
  
</div></center>
</table>

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



