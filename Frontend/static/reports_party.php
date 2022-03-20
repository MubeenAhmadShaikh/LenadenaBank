<?php
  include('include/connection.php');
  error_reporting(0);
  session_start();
  if ($_SESSION['username']==false) {
     header("Location:sign_in.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="LenaDenaBank" />
	<link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>LenaDenaBank | Party Report</title>
    <link href="css/app.css" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <main class="content">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-xl-12 partyTable">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="card-actions float-end">
                      <div class="dropdown position-relative">
                      

                       
                      </div>
                    </div>
                    <h5 class="card-title mb-0">Party Reports</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped" style="width: 100%">
                      <thead>
                        <tr >
                          

											<th>Account Number</th>
											<th>Name</th>
											<th>Transaction Id</th>
											<th>Type</th>
											<th>Amount</th>
											<th>Total Balance</th>
											<th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                       <!--<tr id="party1"> -->
                       <?php
                          $querry="SELECT * FROM `party_cashbook`";
                           
                          $result=mysqli_query($conn,$querry) or die(mysqli_error($conn));

                          if(mysqli_num_rows($result)>0)
                          {
                            echo "<script>console.log('test1');</script>";                            
                            while($row=mysqli_fetch_assoc($result)){
                               echo "<script>console.log('hey');</script>";
                              
                        ?>

                      <!--   <tr id="party1" > -->
                        <tr id="party1">
                          <td><?php echo $row['account_number'];?></td>
                          <td><?php echo $row['pname']; ?></td>
                          <td><?php echo $row['transaction_id']; ?></td>
                          <td><?php echo $row['type'];?></td>
                          <td><?php echo $row['amount'];?></td>
                          <td><?php echo $row['total_balance']; ?> </td>
                          <td><?php echo $row['date']; ?> </td> 
                          
                     
                    </tr>   
                          
                        <?php }}?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>

    <script src="js/app.js"></script>
    
  </body>
</html>
    