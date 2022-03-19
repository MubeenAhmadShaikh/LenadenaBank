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


    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>LenaDenaBank | Reports</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    <link href="css/select2.min.css" rel="stylesheet" type="text/css" /> 
    <script src="js/jquery.min.js"></script> 
    <script src="js/select2.min.js"></script>
  </head>
<?php 
if (isset($_POST['transaction'])) {

    $amounts = mysqli_real_escape_string($conn,$_POST['amount']);
    $acc_no=mysqli_real_escape_string($conn,$_POST['acc_no']);

    if(mysqli_real_escape_string($conn,$_POST['entity']=='party')){

      if(mysqli_real_escape_string($conn,$_POST['trans_type']=='debit')){
            echo "<script>console.log('debit');</script>";

            $q1 = "SELECT `total_balance`,`pname` FROM `party` WHERE `account_number`='$acc_no'";

            $get_ball=mysqli_query($conn,$q1) or die(mysqli_error($conn));;

            $account_open_date=date("Y-m-d");

            if(mysqli_num_rows($get_ball)>0){
                while($row=mysqli_fetch_assoc($get_ball)){
                  $get_bal=$row['total_balance'];
                  $get_pname=$row['pname'];
                  echo"<script>console.log('$get_bal')</script>";
                  echo"<script>console.log('$amounts')</script>";

                  if($get_bal<$amounts){
                    echo"<script>alert('dont have enough funds to withdraw')</script>";

                  }

                  else{

                  $new_amount=$get_bal-$amounts;

                  echo"<script>console.log('$new_amount')</script>";

                  $up_party_bal = "UPDATE `party` SET `total_balance`='$new_amount' WHERE `account_number`='$acc_no' ";

                  $ins_transaction = "INSERT INTO party_cashbook (`pname`,`account_number`,`date`,`type`,`amount`,`total_balance`) VALUES('$get_pname','$acc_no','$account_open_date','debit','$amounts','$new_amount')";

                  if(mysqli_query($conn,$up_party_bal)and(mysqli_query($conn,$ins_transaction))){
                    echo "<script>console.log('maza agaya');</script>";
                  }


                  }
                }

            }
          }
        


    else{
      if(mysqli_real_escape_string($conn,$_POST['trans_type']=='credit'))
      {
        echo "<script>console.log('credit');</script>";
              $q1 = "SELECT `total_balance`,`pname` FROM `party` WHERE `account_number`='$acc_no'";

              $get_ball=mysqli_query($conn,$q1) or die(mysqli_error($conn));;

              $account_open_date=date("Y-m-d");

              if(mysqli_num_rows($get_ball)>0){
                  while($row=mysqli_fetch_assoc($get_ball)){
                    $get_bal=$row['total_balance'];
                    $get_pname=$row['pname'];
                    echo"<script>console.log('$get_bal')</script>";
                    echo"<script>console.log('$amounts')</script>";
                   $new_amount=$get_bal+$amounts;

                    echo"<script>console.log('$new_amount')</script>";

                    $up_party_bal = "UPDATE `party` SET `total_balance`='$new_amount' WHERE `account_number`='$acc_no' ";

                    $ins_transaction = "INSERT INTO party_cashbook (`pname`,`account_number`,`date`,`type`,`amount`,`total_balance`) VALUES('$get_pname','$acc_no','$account_open_date','credit','$amounts','$new_amount')";

                    if(mysqli_query($conn,$up_party_bal)and(mysqli_query($conn,$ins_transaction))){
                      echo "<script>console.log('maza agaya');</script>";

                    }
                  }

              }


      }
    }
  }
  else{
      if(mysqli_real_escape_string($conn,$_POST['trans_type']=='debit')){
        echo"<script>alert('cant debit on loan account')</script>";

          }
      
      else{
        echo "<script>console.log('credit');</script>";
        $q1 = "SELECT `loan_amount`, `total_balance`,`lname` FROM `loan` WHERE `loan_id`='$acc_no'";

        $get_ball=mysqli_query($conn,$q1) or die(mysqli_error($conn));

        $account_open_date=date("Y-m-d");

        if(mysqli_num_rows($get_ball)>0){
        while($row=mysqli_fetch_assoc($get_ball)){
          $get_bal=$row['total_balance'];
          $get_pname=$row['lname'];
          $get_loan=$row['loan_amount'];
          echo"<script>console.log('$get_bal')</script>";
          echo"<script>console.log('$amounts')</script>";

          if($get_bal*-1>=$amounts){
            $new_amount=$get_bal+$amounts;

          echo"<script>console.log('$new_amount')</script>";
          $up_party_bal = "UPDATE `loan` SET `total_balance`='$new_amount' WHERE `loan_id`='$acc_no' ";
          $ins_transaction = "INSERT INTO loan_cashbook (`lname`,`loan_id`,`date`,`type`,`loan_amount`,`total_balance`) VALUES('$get_pname','$acc_no','$account_open_date','credit','$amounts','$new_amount')";
          if(mysqli_query($conn,$up_party_bal)and(mysqli_query($conn,$ins_transaction))){
            echo "<script>console.log('maza agaya');</script>";

                    }}
          else{
            echo"<script>alert('overflow of loan_amount either paid full loan or paying invalid amount')</script>";

          }
                  }

              }

      }    

}

 }
?>
  <body>
    <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <main class="content">
          <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Transaction</h1>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  
                  <form class="m-4" method="post" name='transaction'>
                  <!-- sixth row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                        <label  class="form-label">Select Entity</label>
                        <select class="form-select " aria-label="Default select example" name="entity" id="entity">
                            <option selected>Select</option>
                            <option value="party">Party</option>
                            <option value="loan">Loan</option>
                        </select>
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label ">Account Number</label>
                        <select class="form-select " aria-label="Default select example" name="acc_no" id="acc_no" ></select>
                    </div>
                    
                </div>
                
                <!-- seventh row -->
                
                <div class="row">
                    <div class="w-50 mb-3">
                        <label  class="form-label">Amount</label>
                        <input type="decimal" class="form-control input" name="amount"  >
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label">Transaction Type</label>
                          <select class="form-select" aria-label="Default select example" name="trans_type" id="trans_type">
                            <option selected value="trans_type_null">Select</option>
                            <option value="debit">Debit</option>
                            <option value="credit">Credit</option>
                          </select>
                    </div> 
                    
                  </div>
                <div class="row"> 
                    <div class="w-100 mb-3">
                      <button type="submit" class="form-control btn btn-primary" name="transaction" >Submit</button>
                    </div>
                    
                    
                  </div>
</form>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid p-0">
              
            <h1 class="h3 mb-3">Recent Transactions</h1>
            <div class="row">
              <div class="col-6">
                <div class="card">
                <h1 class="h4 m-3">Party Transactions</h1>
                <table class="table">
									<thead>
										<tr>
											<th >Name</th>
											<th >Account Number</th>
											<th >Date</th>
											<th >Type</th>
											<th >Amount</th>
										</tr>
									</thead>
									<tbody>
										
											<?php
												$querry="SELECT * FROM `party_cashbook` ORDER by date DESC Limit 5;";
												 
												$result=mysqli_query($conn,$querry);

												if(mysqli_num_rows($result)>0)
												{
												  echo "<script>console.log('test1');</script>";
												
												while($row=mysqli_fetch_assoc($result)){
													 echo "<script>console.log('hey');</script>";

												?>	
												<tr>
                        <td><?php echo $row['pname']; ?></td>
												<td><?php echo $row['account_number'];?></td>
												<td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['type']; ?></td>
												<td><?php echo $row['amount']; ?></td>
											<?php 
											} }
											?>
										</tr>
										
									</tbody>
								</table>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                <h1 class="h4 m-3">Loan Transactions</h1>
                <table class="table">
									<thead>
										<tr>
											<th >Name</th>
											<th >Account Number</th>
											<th >Date</th>
											<th >Amount Recived</th>
											<th >Amount Pending</th>
										</tr>
									</thead>
									<tbody>
										
											<?php
												$querry="SELECT * FROM `loan_cashbook` ORDER by date DESC Limit 5;";
												 
												$result=mysqli_query($conn,$querry);

												if(mysqli_num_rows($result)>0)
												{
												  echo "<script>console.log('test1');</script>";
												
												while($row=mysqli_fetch_assoc($result)){
													 echo "<script>console.log('hey');</script>";

												?>	
												<tr>
                        <td><?php echo $row['lname']; ?></td>
												<td><?php echo $row['loan_id'];?></td>
												<td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['loan_amount']; ?></td>
                        <td><?php echo $row['total_balance']; ?></td>
											<?php 
											} }
											?>
										</tr>
										
									</tbody>
								</table>
                </div>
              </div>
            </div>
        </div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>
    <!--<script type="text/javascript">
        
    window.onload = function(){
        let inputFields= document.querySelectorAll(".input")
        let dropDowns = document.querySelectorAll(".form-select")
        for(let i=0;i<inputFields.length;i++){
            inputFields[i].value="";
            for(let j=0;j<dropDowns.length;j++){
                dropDowns[i].value="Select";
            }
        }
}  
    </script> -->
    <script src="js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#acc_no").select2();
    });
    $('#entity').on('change', function () {
          var selectVal = $("#entity option:selected").val();
          if(selectVal=="party"){
            $("option[value='debit']").attr("disabled",false);
            $('#trans_type').prop('selectedIndex', '0');
            $("#acc_no").empty();
            $.ajax({
              url : 'include/acc_no_party.php',
              type : 'POST',
              success : function(result){ 
                  var obj = jQuery.parseJSON(result);
                  console.log(obj);
                  mySelect = document.getElementById('acc_no');
                    $("#acc_no").empty();
                    for(var i=0;i<obj.length;i++){
                      myOption = document.createElement("option");
                      myOption.value = obj[i][1];
                      myOption.text = obj[i];
                      mySelect.appendChild(myOption);
                    }
              }
            });
          }
          else if(selectVal=="loan"){
            $("option[value='debit']").attr("disabled", "disabled");
            $('#trans_type').prop('selectedIndex', '0');
            $("#acc_no").empty();
            $.ajax({
              url : 'include/acc_no_loan.php',
              type : 'POST',
              success : function(result){ 
                  var obj = jQuery.parseJSON(result);
                  console.log(obj);
                  mySelect = document.getElementById('acc_no');
                    $("#acc_no").empty();
                    for(var i=0;i<obj.length;i++){
                      myOption = document.createElement("option");
                      myOption.value = obj[i][1];
                      myOption.text = obj[i];
                      mySelect.appendChild(myOption);
                    }
              }
            });
          }
          else{
            $("option[value='debit']").attr("disabled",false);
            $('#trans_type').prop('selectedIndex', '0');
            $("#acc_no").empty();
          }
        });
    </script>  
  </body>
</html>
