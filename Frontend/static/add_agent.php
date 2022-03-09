<?php
include('include/connection.php');
error_reporting(0);
session_start();
if ($_SESSION['username']==false) {
   header("Location:sign_in.php");
}
?>
<!-- #TODO
1. Add Date of birth php
 -->
<?php 
if (isset($_POST['add'])) {
  $afirst_name = mysqli_real_escape_string($conn,$_POST['afirst_name']);
  $alast_name = mysqli_real_escape_string($conn,$_POST['alast_name']);
  $aname = $afirst_name." ".$alast_name;
  $kyc = mysqli_real_escape_string($conn, $_POST['kyc']); 
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $f_letter_of_fname = $afirst_name[0];
  $l_letter_of_fname = $alast_name[0];
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  $num = mysqli_real_escape_string($conn, $_POST['contact']);


  
  if($kyc=='yes'){
    $adhaar_number = mysqli_real_escape_string($conn,$_POST['adhaar_number']);
    $pan_number = mysqli_real_escape_string($conn,$_POST['pan_number']);
    $kyc = true;
    $ins_agent="INSERT INTO agent(aname,kyc,adhaar_number,pan_number,gender,dob,contact_num) VALUES('$aname','$kyc','$adhaar_number','$pan_number','$gender','$dob','$num' )";

    if(mysqli_query($conn,$ins_agent)){
      $q1="SELECT `sr_no_agent` FROM `agent` WHERE `contact_num`='$num'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
                echo "<script>console.log('hey');</script>";

        while($row = mysqli_fetch_assoc($get_sr)){
            $sr_no_agent= $row['sr_no_agent'];
        }
      
        $sr_no_agent_new=$f_letter_of_fname.$l_letter_of_fname.$sr_no_agent;
        $ins_agent_id = "UPDATE `agent` SET `agent_id`='$sr_no_agent_new' WHERE `contact_num`='$num' ";        
        echo "<script>console.log('$ins_agent_id');</script>";

        if(mysqli_query($conn,$ins_agent_id)){
            header('Location:agents.php');
        }
    }

    }

  }

  elseif($kyc=="no"){
    $kyc = false;
    $ins_agent="INSERT INTO agent(aname,kyc,gender,dob,contact_num) VALUES('$aname','$kyc','$gender','$dob','$num')";

    if(mysqli_query($conn,$ins_agent)){
      $q1="SELECT `sr_no_agent` FROM `agent` WHERE `contact_num`='$num'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
                echo "<script>console.log('hey');</script>";

        while($row = mysqli_fetch_assoc($get_sr)){
            $sr_no_agent= $row['sr_no_agent'];
        }
      

        $sr_no_agent_new=$f_letter_of_fname.$l_letter_of_fname.$sr_no_agent;
        $ins_agent_id = "UPDATE `agent` SET `agent_id`='$sr_no_agent_new' WHERE `aname`='$aname' ";        
        echo "<script>console.log('$ins_agent_id');</script>";

        if(mysqli_query($conn,$ins_agent_id)){
            header('Location:agents.php');
        }
    }

    }

  }

    ob_end_flush();
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
              <h1 class="h3 mb-3">Add Agent</h1>
              <div class="row">
              <div class="col-12">
                <div class="card">
                <form class="m-5" method="post" name='add'>
                  <!-- First row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">First Name</label>
                      <input type="text" class="form-control" name="afirst_name" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="alast_name"  aria-describedby="emailHelp">
                    </div>
                    
                  </div>
                  <!-- Second row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Gender</label>
                      <select class="form-select" aria-label="Default select example" name="gender">
                        <option selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
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
                <div class="w-50 mb-3">
                    <label  class="form-label">Date of birth</label>
                    <input type="date" class="form-control" name="dob" >
                </div>
                <div class="w-50 mb-3">
                      <label  class="form-label">Contact number</label>
                      <input type="phone" class="form-control" name="contact"  >
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
