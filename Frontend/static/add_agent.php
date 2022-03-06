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
                <form class="m-5">
                  <!-- First row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label for="exampleInputEmail1" class="form-label">First Name</label>
                      <input type="email" class="form-control" name="afirst_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="w-50 mb-3">
                      <label for="exampleInputEmail1" class="form-label">Last Name</label>
                      <input type="email" class="form-control" name="alast_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                  </div>
                  <!-- Second row -->
                  <div class="row"> 
                    <div class="w-50 mb-3">
                      <label for="exampleInputEmail1" class="form-label">Gender</label>
                      <select class="form-select" aria-label="Default select example" name="gender">
                        <option selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Trans">Trans</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                      </select>
                    </div>
                    <div class="w-50 mb-3">
                      <label for="exampleInputEmail1" class="form-label">KYC</label>
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
                    <label for="exampleInputEmail1" class="form-label">Adhaar Number</label>
                    <input type="text" class="form-control" name="adhaar" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="w-50 mb-3">
                    <label for="exampleInputEmail1" class="form-label">PAN Number</label>
                    <input type="text" class="form-control" name="pan" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
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
    
      <script type="text/javascript">
      $(function(){
            $('#datepicker').datepicker();
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>
