<?php
include('include/connection.php');
error_reporting(0);
session_start();
if ($_SESSION['username']==false) {
   header("Location:sign_in.php");
}
?>

<?php 
if (isset($_POST['add'])) {
  $pname = mysqli_real_escape_string($conn,$_POST['name']);
  $kyc = mysqli_real_escape_string($conn, $_POST['kyc']); 
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  $laddress = mysqli_real_escape_string($conn, $_POST['laddress']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $loan_amount = mysqli_real_escape_string($conn, $_POST['lamount']);
  $loan_intrest = mysqli_real_escape_string($conn, $_POST['lintrest']);
  $loan_duration = mysqli_real_escape_string($conn, $_POST['lduration']);
  $agentid = mysqli_real_escape_string($conn, $_POST['agentId']);
  $agent_commission = mysqli_real_escape_string($conn, $_POST['agent_commission']);
  date_default_timezone_set('Asia/Calcutta'); 
  $sanction_date=date("Y-m-d");
  echo "<script>console.log('$pfirst_name,$plast_name,$pname,$kyc,$adhaar_number,$pan,$gender',$sanction_date);</script>";
  
  if($kyc=='yes'){
    $adhaar_number = mysqli_real_escape_string($conn,$_POST['adhaar_number']);
    $pan_number = mysqli_real_escape_string($conn,$_POST['pan_number']);
    $kyc = true;
    $ins_party="INSERT INTO loan (`lname`,`kyc`,`adhar_number`,`pan_card`,`address`,`city`,`agent_code`,`agent_commision`,`contact_num`,`loan_sanction_date`,`dob`,`occupation`,`discription`,`loan_amount`,`loan_interest`,`loan_duration`) VALUES ('$pname','$kyc','$adhaar_number','$pan_number','$laddress','$city','$agentid','$agent_commission','$contact','$sanction_date','$dob','$occupation','$description','$loan_amount','$loan_intrest','$loan_duration')";

    if(mysqli_query($conn,$ins_party)){
      $q1="SELECT `sr_no` FROM `loan` WHERE `contact_num`='$contact'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
                echo "<script>console.log('hey');</script>";

        while($row = mysqli_fetch_assoc($get_sr)){
            $sr_no= $row['sr_no'];
        }
        echo "<script>console.log('$sr_no');</script>"; 
        $sr_no_new=$sr_no;
        $ins_party_id = "UPDATE `loan` SET `loan_id`='$sr_no_new' WHERE `contact_num`='$contact' ";        
        echo "<script>console.log('$ins_party_id');</script>";

        if(mysqli_query($conn,$ins_party_id)){
            header('Location:loans.php');
        }
    }

    }

  }

  elseif($kyc=="no"){
    $kyc = false;
    $ins_party="INSERT INTO loan (`lname`,`kyc`,`address`,`city`,`agent_code`,`agent_commision`,`contact_num`,`loan_sanction_date`,`dob`,`occupation`,`discription`,`loan_amount`,`loan_interest`,`loan_duration`) VALUES ('$pname','$kyc','$laddress','$city','$agentid','$agent_commission','$contact','$sanction_date','$dob','$occupation','$description','$loan_amount','$loan_intrest','$loan_duration')";

    if(mysqli_query($conn,$ins_party)){
      $q1="SELECT `sr_no` FROM `loan` WHERE `contact_num`='$contact'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
                echo "<script>console.log('hey');</script>";

        while($row = mysqli_fetch_assoc($get_sr)){
            $sr_no= $row['sr_no'];
        }
        echo "<script>console.log('$sr_no');</script>"; 
        $sr_no_new=$sr_no;
        $ins_party_id = "UPDATE `loan` SET `loan_id`='$sr_no_new' WHERE `contact_num`='$contact' ";        
        echo "<script>console.log('$ins_party_id');</script>";

        if(mysqli_query($conn,$ins_party_id)){
            header('Location:loans.php');
        }
    }

    }

  }

    ob_end_flush();
      }
?>


<!-- #TODO
1. Add the names of each field according to you
-->
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

    <title>LenaDenaBank | Agents</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
  <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <main class="content">
          <div class="container-fluid p-0">
              <h1 class="h3 mb-3">Add Loans</h1>
              <div class="row">
              <div class="col-12">
                <div class="card">
                <form class="m-5" method="post" name='add'>
                  <!-- First row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Loan Name</label>
                      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Contact number</label>
                      <input type="phone" class="form-control" name="contact"  >
                    </div>
                    
                  </div>
                  <!-- Second row -->
                  <div class="row"> 
                  <div class="w-50 mb-3">
                        <label  class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="dob"  >
                    </div> 
                    <div class="w-50 mb-3">
                      <label class="form-label">KYC</label>
                      <select class="form-select" aria-label="Default select example" name="kyc">
                        <option selected>Select KYC Status</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <!-- Third row -->
                <div class="row"> 
                <div class="w-50 mb-3">
                    <label  class="form-label">Adhaar Number</label>
                    <input type="text" class="form-control" name="adhaar_number" aria-describedby="emailHelp">
                  </div>
                  <div class="w-50 mb-3">
                    <label  class="form-label">PAN Number</label>
                    <input type="text" class="form-control" name="pan_number"  aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- fourth row -->
                <div class="row"> 
                    
                             
                </div>
                  <!-- Fifth row -->
                <div class="row"> 
                <div class="w-50 mb-3">
                        <label  class="form-label">Occupation</label>
                        <input type="phone" class="form-control" name="occupation"  >
                    </div>
                    
                    <div class="w-50 mb-3">
                        <label  class="form-label">City</label>
                        <input type="decimal" class="form-control" name="city" >
                    </div>
                    
                  </div>
                  <!-- sixth row -->
                  <div class="row"> 
                  <div class="w-50 mb-3">
                      <label  class="form-label">Address</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="laddress"></textarea>
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                     
                    </div>          
                </div>
                
                  <!-- seventh row -->
                
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Loan Amount</label>
                      <input type="text" class="form-control" name="lamount">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Loan Intrest</label>
                      <input type="decimal" class="form-control" name="lintrest" >
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Loan duration</label>
                      <input type="number" class="form-control" name="lduration" placeholder="Enter Duration in Year's" >
                    </div>
                    
                  </div>
                <!-- eighth row -->
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent id</label>
                      <select class="form-select" aria-label="Default select example" name="agentId">
                        <option selected>Select Agents</option>
                        <option value="Hans">Hans</option>
                        <option value="khizar">Khizar</option>
                      </select>
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent commission</label>
                      <input type="decimal" class="form-control" name="agent_commission"  >
                    </div>          
                </div>
                
  
  
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</form>
</div>
</div>
</div>
              
          </div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>
    
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
      
  </body>
</html>
