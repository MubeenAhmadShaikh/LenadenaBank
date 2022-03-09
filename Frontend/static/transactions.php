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
  </head>
<?php 
if (isset($_POST['transactions'])) {
  
}?>
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
                        <select class="form-select " aria-label="Default select example" name="entity">
                            <option selected>Select</option>
                            <option value="party">Party</option>
                            <option value="loan">Loan</option>
                        </select>
                    </div>
                    <div class="w-50 mb-3">
                        <label  class="form-label ">Account Number</label>
                        <input type="text" class="form-control input " name="acc_no" aria-describedby="emailHelp">
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
                          <select class="form-select" aria-label="Default select example" name="trans_type">
                            <option selected>Select</option>
                            <option value="debit">Debit</option>
                            <option value="credit">Credit</option>
                          </select>
                    </div> 
                    
                  </div>
                <div class="row"> 
                    <div class="w-100 mb-3">
                      <input type="submit" class="form-control btn btn-primary" value="Submit" name="transfer" >
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
              <div class="col-12">
                <div class="card">
                <h1 class="h3 m-3">Nope</h1>

            </div>
            </div>
            </div>
        </div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>
    <script type="text/javascript">
        
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
    </script>
    <script src="js/app.js"></script>
  </body>
</html>
