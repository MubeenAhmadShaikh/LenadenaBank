<?php
include('include/connection.php');
error_reporting(0);
session_start();
if ($_SESSION['username']==false) {
   header("Location:sign_in.php");
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
                      <input type="phone" class="form-control" name=""  >
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
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label">City</label>
                        <input type="decimal" class="form-control" name="" >
                    </div>
                    
                  </div>
                  <!-- sixth row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                        <label  class="form-label">Occupation</label>
                        <input type="phone" class="form-control" name=""  >
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     
                    </div>          
                </div>
                
                  <!-- seventh row -->
                
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Balance</label>
                      <input type="text" class="form-control" name="" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Intrest amount</label>
                      <input type="decimal" class="form-control" name=""  aria-describedby="emailHelp">
                    </div>
                    
                  </div>
                <!-- eighth row -->
                <div class="row"> 
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent id</label>
                      <select class="form-select" aria-label="Default select example" name="kyc">
                        <option selected>Select Agents</option>
                        <option value="Hans">Hans</option>
                        <option value="khizar">Khizar</option>
                      </select>
                    </div>
                    <div class="w-50 mb-3">
                      <label  class="form-label">Agent comission</label>
                      <input type="decimal" class="form-control" name=""  >
                    </div>          
                </div>
                
  <!-- 
      
        pname 	 done
        kyc 	done
        adhar_number done
        pan_card  done
        balance done
        address done
        city done
        agent_id done
        agent_commision done	
        contact_num done  
        dob done	
        occupation 
        description 
    	interest done


   -->
  
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
