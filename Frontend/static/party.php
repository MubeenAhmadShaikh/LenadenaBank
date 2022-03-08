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
    <title>LenaDenaBank | Party</title>
    <!-- CDN till demo -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- CDN till demo -->
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
            <div class="row">
              <div class="col-xl-12 partyTable">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="card-actions float-end">
                      <div class="dropdown position-relative">
                      <a class="btn btn-primary" href="add_party.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Party</a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <h5 class="card-title mb-0">Party</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped" style="width: 100%">
                      <thead>
                        <tr >
                          

                          <th>Acc. No.</th>
											<th>Name</th>
											<th>Balance</th>
											<th>Agent</th>
											<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $querry="SELECT * FROM `party`";
                           
                          $result=mysqli_query($conn,$querry) or die(mysqli_error($conn));

                          if(mysqli_num_rows($result)>0)
                          {
                            echo "<script>console.log('test1');</script>";                            
                            while($row=mysqli_fetch_assoc($result)){
                               echo "<script>console.log('hey');</script>";
                              
                        ?>

                      <!--   <tr id="party1" > -->
                        <tr>
                          <td><?php echo $row['account_number'];?></td>
                          <td><?php echo $row['pname']; ?></td>
                          <td><?php echo $row['total_balance']; ?></td>
                          <td><?php echo $row['agent_id'];?></td>

                            <td class="table-action d-flex justify-content-around">
                              <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                              <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                            </td>
                          
                      <?php 
                      } }
                      ?>
                    </tr>
                      </tbody>
                    </table>

                    <strong>Recent Loans</strong>

                    <ul class="timeline mt-2 mb-0">
                      <li class="timeline-item">
                        <strong>90 lakhs</strong>
                        <span class="float-end text-muted text-sm">1 month ago</span>
                        <p>Loan description will be mentioned here</p>
                      </li>
                      <li class="timeline-item">
                        <strong>20 lakhs</strong>
                        <span class="float-end text-muted text-sm">3 month ago</span>
                        <p>Loan description will be mentioned here</p>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- <main class="content">
          <div class="container-fluid p-0">
            <div class="d-flex flex-row justify-content-between">

              <h1 class="h3 mb-3">Party</h1>
              <div>

                <a class="btn btn-primary" href="add_party.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Party</a>
              </div>
            </div>
		
            <div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								
								<table class="table">
									<thead>
										<tr>
											<th>Acc. No.</th>
											<th>Name</th>
											<th>Balance</th>
											<th>Agent Id</th>
											<th>Contact</th>
											<th >Acc. Opening date</th>
											<th class="d-none d-md-table-cell" >Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										
												
												<tr>
													<td>123</td>
													<td>Abc</td>
													<td>Male</td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td >12/2/2021</td>
															<td class="table-action d-flex justify-content-around">
																<a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
																<a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
																
														</td>
													
											
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
          </div> -->
		  
		  <!-- Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Party</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Removing party will remove all its details and data that cannot be retrieved please confirm to delete or cancel
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="delete" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script>
      let party= document.getElementById('party1');
      let partyTable= document.querySelector('.partyTable');
      let partyDetails= document.querySelector('.partyDetails');
      
      party.addEventListener('click',abc)
      function abc(){
        if(partyTable.classList.contains('col-xl-12')){
          partyTable.classList.remove('col-xl-12');
          partyTable.classList.add('col-xl-8');
          partyDetails.classList.remove('d-none');
        }else{
          partyTable.classList.add('col-xl-12');
          partyTable.classList.remove('col-xl-8');
          partyDetails.classList.add('d-none');
          
        }
      }
      </script>
  </body>
</html>
