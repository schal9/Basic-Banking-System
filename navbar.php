
  
<?php
  $conn = mysqli_connect("localhost", "root", "", "sparks_bank") or die("Can't connect");
  if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * FROM view_users WHERE id = $from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_assoc($query);


    $sql = "SELECT * FROM view_users WHERE id = $to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_assoc($query);

    if ($amount < 0) {



   
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE view_users set balance=$newbalance where id=$from";
                $execute = mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE view_users set balance=$newbalance where id=$to";
                $execute = mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO `transaction`(`s_no`, `sender`, `reciever`, `amount`) 
    VALUES(NULL,'{$sender}','{$receiver}','{$amount}')";
      $execute = mysqli_query($conn, $sql);
                

                if($execute){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      
    button{
      border:none;
      background: #d9d9d9;
    }
      button:hover{
      background-color:#777E8B;
      transform: scale(1.1);
      color:white;
    }

    </style>
</head>

<body>
 


  <div class="mon_from" style="position:relative; ">
    <form class="app-form" method="post">
      <label style="color : black;"><b>Transfer From:</b></label>
      <select name="from" class="form-control" required>
        <option value="" disabled selected>Choose</option>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "sparks_bank") or die("Can't connect");
        $sql = "SELECT * FROM `view_users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <option class="table" value="<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?> [balance:
            <?php echo $row['balance']; ?> ]</option>
        <?php
        }
        ?>
      </select>
  </div>


  <div class="mon_from" style="position:relative;">
    <form class="app-form" method="post">
      <br>
      <label style="color : black;"><b>Transfer To:</b></label>
      <select name="to" class="form-control" required>
        <option value="" disabled selected>Choose</option>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "sparks_bank") or die("Can't connect");
        $sql = "SELECT * FROM `view_users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <option class="table" value="<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?> [balance:
            <?php echo $row['balance']; ?> ]</option>
        <?php
        }
        ?>
      </select>
  </div>



  <div class="mon_from" style="position:relative; ">
    <form class="app-form" method="post">
      <br><br>
      <div class="app-form-group">
        <input class="app-form-control" placeholder="Amount To Be Transferred" type="number" name="amount" required>
      </div>
      <div class="app-form-all-buttons">
        <br><br>
        <button type="submit" class="btn" name='submit'  >Transfer </button>

    </form>
  </div>
  </div>
  



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
