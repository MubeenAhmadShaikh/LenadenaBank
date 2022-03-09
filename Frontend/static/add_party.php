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
  $pfirst_name = mysqli_real_escape_string($conn,$_POST['pfirst_name']);
  $plast_name = mysqli_real_escape_string($conn,$_POST['plast_name']);
  $pname = $pfirst_name." ".$plast_name;
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $kyc = mysqli_real_escape_string($conn, $_POST['kyc']); 
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  $paddress = mysqli_real_escape_string($conn, $_POST['paddress']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $pbalance = mysqli_real_escape_string($conn, $_POST['balance']);
  $rate_of_intrest = mysqli_real_escape_string($conn, $_POST['rate_of_intrest']);
  $agentid = mysqli_real_escape_string($conn, $_POST['agentId']);
  $agent_commission = mysqli_real_escape_string($conn, $_POST['agent_commission']);

  date_default_timezone_set('Asia/Calcutta'); 
  $account_open_date=date("Y-m-d");
  echo "<script>console.log('$pfirst_name,$plast_name,$pname,$kyc,$adhaar_number,$pan,$gender',$account_open_date);</script>";
  
  if($kyc=='yes'){
    $adhaar_number = mysqli_real_escape_string($conn,$_POST['adhaar_number']);
    $pan_number = mysqli_real_escape_string($conn,$_POST['pan_number']);
    $kyc = true;
    $ins_party="INSERT INTO party (`pname`,`kyc`,`adhar_number`,`pan_card`,`total_balance`,`address`,`city`,`agent_id`,`agent_commision`,`contact_num`,`account_opening_date`,`dob`,`occupation`,`discription`,`interest`,`gender`) VALUES('$pname','$kyc','$adhaar_number','$pan_number','$pbalance','$paddress','$city','$agentid','$agent_commission','$contact','$account_open_date','$dob','$occupation','$description','$rate_of_intrest','$gender')";

    if(mysqli_query($conn,$ins_party)){
      $q1="SELECT `account_number` FROM `party` WHERE `contact_num`='$contact'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
        echo "<script>console.log('maachudipadi h');</script>";
        $get_acc_no="SELECT `account_number` FROM `party` WHERE `contact_num`='$contact'";
        $result=mysqli_query($conn,$get_acc_no) or die(mysqli_error($conn));
      if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
            $get_acc_no=$row['account_number'];

            $ins_trans ="INSERT INTO party_cashbook(`pname`, `account_number`, `date`, `type`, `amount`, `total_balance`) VALUES('$pname','$get_acc_no','$account_open_date','credit','$pbalance','$pbalance')";

          if(mysqli_query($conn,$ins_trans)){
          header('Location:party.php');}

         }
       }

    }

    }

  }

  elseif($kyc=="no"){
    $kyc = false;
    $ins_party="INSERT INTO party (`pname`,`kyc`,`total_balance`,`address`,`city`,`agent_id`,`agent_commision`,`contact_num`,`account_opening_date`,`dob`,`occupation`,`discription`,`interest`,`gender`) VALUES('$pname','$kyc','$pbalance','$paddress','$city','$agentid','$agent_commission','$contact','$account_open_date','$dob','$occupation','$description','$rate_of_intrest','$gender')";

    if(mysqli_query($conn,$ins_party)){
      $q1="SELECT `account_number` FROM `party` WHERE `contact_num`='$contact'";
      $get_sr=mysqli_query($conn,$q1);

      if(mysqli_num_rows($get_sr)>0){
        echo "<script>console.log('maachudipadi h');</script>";
        $get_acc_no="SELECT `account_number` FROM `party` WHERE `contact_num`='$contact'";
        $result=mysqli_query($conn,$get_acc_no) or die(mysqli_error($conn));
      if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
            $get_acc_no=$row['account_number'];

            $ins_trans ="INSERT INTO party_cashbook(`pname`, `account_number`, `date`, `type`, `amount`, `total_balance`) VALUES('$pname','$get_acc_no','$account_open_date','credit','$pbalance','$pbalance')";

          if(mysqli_query($conn,$ins_trans)){
          header('Location:party.php');}

         }
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
              <h1 class="h3 mb-3">Add Party</h1>
              <div class="row">
              <div class="col-12">
                <div class="card">
                <form class="m-5" method="post" name='add'>
                  <!-- First row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">First Name</label>
                      <input type="text" class="form-control" name="pfirst_name" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="plast_name"  aria-describedby="emailHelp">
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
                      <label  class="form-label">Contact number</label>
                      <input type="phone" class="form-control" name="contact"  >
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="dob"  >
                    </div>          
                </div>
                  <!-- Fifth row -->
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Address</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paddress"></textarea>
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label">City</label>
                        <input type="decimal" class="form-control" name="city" >
                    </div>
                    
                  </div>
                  <!-- sixth row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                        <label  class="form-label">Occupation</label>
                        <input type="phone" class="form-control" name="occupation"  >
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                     
                    </div>          
                </div>
                
                  <!-- seventh row -->
                
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Balance</label>
                      <input type="text" class="form-control" name="balance" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Intrest amount</label>
                      <input type="decimal" class="form-control" name="rate_of_intrest"  aria-describedby="emailHelp">
                    </div>
                    
                  </div>
                <!-- eighth row -->
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent id</label>
                      <select class="form-select" aria-label="Default select example" name="agentId">
                        <option selected>Select Agents </option>
                        <option name = 'none'>Select This If No Agent Is Req</option>

                        <?php
                        $querry="SELECT `aname`,`agent_id` FROM `agent`;";
                         
                        $result=mysqli_query($conn,$querry) or die(mysqli_error($conn));

                        if(mysqli_num_rows($result)>0)
                        {
                          echo "<script>console.log('test1');</script>";
                        
                        while($row=mysqli_fetch_assoc($result)){
                           echo "<script>console.log('hey');</script>";

                        ?>
                        <option value=<?php echo $row["agent_id"]; ?>><?php echo $row["aname"]." (".$row['agent_id'].")";?></option>
                      <?php }
                    }?>
                      </select>
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent commission</label>
                      <input type="decimal" class="form-control" name="agent_commission"  >
                    </div>          
                </div>
                
  <!-- 
      
        pname 	 done
        kyc 	done
        adhar_number done
        pan_card  done
        balance done
        paddress done
        city done
        agent_id done
        agent_commision done	
        contact_num done  
        dob done	
        occupation 
        description 
    	interest done


   -->
  
  <button type="submit" class="btn btn-primary" name="add">ADD</button>
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
