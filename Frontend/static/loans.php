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
    <script src="js/jquery.min.js"></script> 
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
                      <input id="myInput" type="text" placeholder="Search..">
                      <a class="btn btn-primary" href="add_loan.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Loans</a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <h5 class="card-title mb-0">Loans</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped" style="width: 100%" id="test">
                      <thead>
                        <tr >
											<th>Id</th>
											<th>Name</th>
											<th>Amount</th>
											<th>Interest</th>
											<th>Duration</th>
											<th >Agent</th>
											<th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="test2">
                       <!--<tr id="party1"> -->
                       <?php
                          $querry="SELECT * FROM `loan`";
                           
                          $result=mysqli_query($conn,$querry) or die(mysqli_error($conn));

                          if(mysqli_num_rows($result)>0)
                          {
                            echo "<script>console.log('test1');</script>";                            
                            while($row=mysqli_fetch_assoc($result)){
                               echo "<script>console.log('hey');</script>";
                              
                        ?>

                      <!--   <tr id="party1" > -->
                        <tr class="party" id="<?php echo $row['loan_id']; ?>">
                          <td><?php echo $row['loan_id'];
                            $GLOBALS['uniqueid']=$row['loan_id'];?></td>
                          <td><?php echo $row['lname']; ?></td>
                          <td><?php echo $row['loan_amount']; ?></td>
                          <td><?php echo $row['loan_interest'];?></td>
                          <td><?php echo $row['loan_duration'];?></td>
                          <td><?php echo $row['agent_id']; ?> </td>
                          <td class="d-none" ><?php echo $row['city']; ?></td>
                          <td class="d-none" ><?php echo $row['kyc']; ?></td>
                          <td class="d-none" ><?php echo $row['adhar_number']; ?></td>
                          <td class="d-none" ><?php echo $row['pan_card']; ?></td>
                          <td class="d-none" ><?php echo $row['address']; ?></td>
                          <td class="d-none" ><?php echo $row['agent_commision']; ?></td>
                          <td class="d-none" ><?php echo $row['contact_num']; ?></td>
                          <td class="d-none" ><?php echo $row['dob']; ?></td>
                          <td class="d-none" ><?php echo $row['occupation']; ?></td>
                          <td class="d-none" ><?php echo $row['discription']; ?></td>
                          <td class="d-none" ><?php echo $row['loan_sanction_date']; ?></td>
                          <td class="d-none" ><?php echo $row['total_balance']; ?></td>

                            <td class="d-flex justify-content">
                              <a href="#" class="p-2" data-bs-toggle="modal" data-bs-target="#editModal" onclick="dataFetch()"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                              <a href="#" class="p-2 text-danger" data-bs-toggle="modal" data-bs-target="#myModal"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                            </td>
                          
                      <?php 
                      } }
                      ?>
                    </tr>
                          
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 d-none partyDetails">
                <div class="card">
                  <div class="card-header">
                    
                    <h5 class="card-title mb-0">Loan Details</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-sm  mb-4">
                      <tbody>
                      
                        <tr>
                          <th>Loan Id</th>
                          <td id="Loan_Id"></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td id="Name"></td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td id="contact"></td>
                        </tr>
                        <tr>
                          <th>Date Of Birth</th>
                          <td id="dob"></td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td id="address"></td>
                        </tr>
                        <tr>
                          <th>KYC</th>
                          <td id="kyc"></td>
                        </tr>
                        <tr>
                          <th>Adhaar Number</th>
                          <td id="adhaar"></td>
                        </tr>
                        <tr>
                          <th>Pan Number</th>
                          <td id="pan"></td>
                        </tr>
                        <tr>
                          <th>City</th>
                          <td id="scity"></td>
                        </tr>
                        <tr>
                          <th>Occupation</th>
                          <td id="occupation"></td>
                        </tr>
                        <tr>
                          <th>Description</th>
                          <td id="description"></td>
                        </tr>
                        <tr>
                          <th>Loan Amount</th>
                          <td id="loan_amount"></td>
                        </tr>
                        <tr>
                          <th>Pending Amount</th>
                          <td id="total_balance"></td>
                        </tr>
                        <tr>
                          <th>Interest</th>
                          <td id="loan_interest"></td>
                        </tr>
                        <tr>
                          <th>Sanction date</th>
                          <td id="loan_sanction_date"></td>
                        </tr>
                        <tr>
                          <th>Duration</th>
                          <td id="loan_duration"></td>
                        </tr>
                        <tr>
                          <th>Agent</th>
                          <td id="agent_name"></td>
                        </tr>
                        <tr>
                          <th>Agent Commission</th>
                          <td id="agent_com"></td>
                        </tr>                 
                      </tbody>
                    </table>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        
		  
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
        <button type="button" name="delete" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteDetails()">Delete</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Party</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <table class="table table-sm  mb-4">
                      <tbody>
                      <tr>
                          <th>Loan Id</th>
                          <td id="uloan_id"></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td><input type="text" class="form-control" id="ulname"></td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td id="ucontact"></td>
                        </tr>
                        <tr>
                          <th>Date Of Birth</th>
                          <td ><input type="date" class="form-control" id="udob"></td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td ><textarea class="form-control" id="uaddress" rows="3"></textarea></td>
                        </tr>
                        <tr>
                          <th>KYC</th>
                          <td >
                            <select class="form-select" aria-label="Default select example" name="kyc" id="ukyc">
                              <option selected>Select KYC Status</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <th>Adhaar Number</th>
                          <td ><input type="text" class="form-control" id="uadhaar"></td>
                        </tr>
                        <tr>
                          <th>Pan Number</th>
                          <td ><input type="text" class="form-control" id="upan"></td>
                        </tr>
                        <tr>
                          <th>City</th>
                          <td ><input type="text" class="form-control" id="uscity"></td>
                        </tr>
                        <tr>
                          <th>Occupation</th>
                          <td ><input type="text" class="form-control" id="uoccupation"></td>
                        </tr>
                        <tr>
                          <th>Description</th>
                          <td ><textarea class="form-control" id="udescription" rows="3"></textarea></td>
                        </tr>
                        <tr>
                          <th>Loan Amount</th>
                          <td id="uloan_amount"></td>
                        </tr>
                        <tr>
                          <th>Pending Amount</th>
                          <td id="upending_amount"></td>
                        </tr>
                        <tr>
                          <th>Loan Interest</th>
                          <td ><input type="text" class="form-control" id="uloan_interest"></td>
                        </tr>
                        <tr>
                          <th>Sanction Date</th>
                          <td id="usanction_date"></td>
                        </tr>
                        <tr>
                          <th>Loan Duration</th>
                          <td><input type="text" class="form-control" id="uloan_duration"></td>
                        </tr>
                        <tr>
                          <th>Agent</th>
                          <td id="uagent_name"></td>
                        </tr>
                        <tr>
                          <th>Agent Commission</th>
                          <td id="uagent_com"></td>
                        </tr>                 
                      </tbody>
                    </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="delete" class="btn btn-success" data-bs-dismiss="confirmModal" data-bs-toggle="modal" data-bs-target="#confirmModal">Update</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="confirmModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Confirm</h4>
        <button type="button" class="btn-close" data-bs-dismiss="editModal" data-bs-toggle="modal" data-bs-target="#editModal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure you want to update the party details...
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="updateLoan()">Update</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="editModal" data-bs-toggle="modal" data-bs-target="#editModal">Cancel</button>
      </div>

    </div>
  </div>
</div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>

  <script>
    var flag;
    var bid, trid;
    $(function() {
        $('#test tr').click(function() {
            trid = $(this).attr('id');
            //Document populating Side Card
            document.getElementById('Loan_Id').innerHTML=$("#"+trid+" td:nth-child(1)").text();
            document.getElementById('Name').innerHTML=$("#"+trid+" td:nth-child(2)").text();
            document.getElementById('contact').innerHTML=$("#"+trid+" td:nth-child(13)").text();
            document.getElementById('dob').innerHTML=$("#"+trid+" td:nth-child(14)").text();
            document.getElementById('address').innerHTML=$("#"+trid+" td:nth-child(11)").text();
            document.getElementById('kyc').innerHTML=$("#"+trid+" td:nth-child(8)").text();
            document.getElementById('adhaar').innerHTML=$("#"+trid+" td:nth-child(9)").text();
            document.getElementById('pan').innerHTML=$("#"+trid+" td:nth-child(10)").text();
            document.getElementById('scity').innerHTML=$("#"+trid+" td:nth-child(7)").text();
            document.getElementById('occupation').innerHTML=$("#"+trid+" td:nth-child(15)").text();
            document.getElementById('description').innerHTML=$("#"+trid+" td:nth-child(16)").text();
            document.getElementById('loan_amount').innerHTML=$("#"+trid+" td:nth-child(3)").text();
            document.getElementById('loan_duration').innerHTML=$("#"+trid+" td:nth-child(5)").text();
            document.getElementById('loan_interest').innerHTML=$("#"+trid+" td:nth-child(4)").text();
            document.getElementById('loan_sanction_date').innerHTML=$("#"+trid+" td:nth-child(17)").text();
            document.getElementById('agent_name').innerHTML=$("#"+trid+" td:nth-child(6)").text();
            document.getElementById('agent_com').innerHTML=$("#"+trid+" td:nth-child(12)").text();
            document.getElementById('total_balance').innerHTML=$("#"+trid+" td:nth-child(18)").text();


            //Document populating update modal
            document.getElementById('uloan_id').innerHTML=$("#"+trid+" td:nth-child(1)").text();
            document.getElementById('ulname').value=$("#"+trid+" td:nth-child(2)").text();
            document.getElementById('ucontact').innerHTML=$("#"+trid+" td:nth-child(13)").text();
            document.getElementById('udob').value=$("#"+trid+" td:nth-child(14)").text();
            document.getElementById('uaddress').innerHTML=$("#"+trid+" td:nth-child(11)").text();
            document.getElementById('ukyc').value=$("#"+trid+" td:nth-child(8)").text();
            document.getElementById('uadhaar').value=$("#"+trid+" td:nth-child(9)").text();
            document.getElementById('upan').value=$("#"+trid+" td:nth-child(10)").text();
            document.getElementById('uscity').value=$("#"+trid+" td:nth-child(7)").text();
            document.getElementById('uoccupation').value=$("#"+trid+" td:nth-child(15)").text();
            document.getElementById('udescription').value=$("#"+trid+" td:nth-child(16)").text();
            document.getElementById('uloan_amount').innerHTML=$("#"+trid+" td:nth-child(3)").text();
            document.getElementById('uloan_duration').value=$("#"+trid+" td:nth-child(5)").text();
            document.getElementById('uloan_interest').value=$("#"+trid+" td:nth-child(4)").text();
            document.getElementById('usanction_date').innerHTML=$("#"+trid+" td:nth-child(17)").text();
            document.getElementById('uagent_name').innerHTML=$("#"+trid+" td:nth-child(6)").text();
            document.getElementById('uagent_com').innerHTML=$("#"+trid+" td:nth-child(12)").text();
            document.getElementById('upending_amount').innerHTML=$("#"+trid+" td:nth-child(18)").text();



            let partyTable= document.querySelector('.partyTable');
            let partyDetails= document.querySelector('.partyDetails');
              if(flag!=trid){
                flag=trid;
                partyTable.classList.remove('col-xl-12');
                partyTable.classList.add('col-xl-8');
                partyDetails.classList.remove('d-none');
              }else if(flag==trid){
                flag=null;
                partyTable.classList.add('col-xl-12');
                partyTable.classList.remove('col-xl-8');
                partyDetails.classList.add('d-none');
              }
          });
      });
  </script>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#test2 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  <script>
    var pageinfo="loan";
    function updateLoan(){
        var ulname=document.getElementById('ulname').value;
        var uscity=document.getElementById('uscity').value;
        var ukyc=document.getElementById('ukyc').value;
        var uadhaar=document.getElementById('uadhaar').value;
        var upan=document.getElementById('upan').value;
        var uaddress=document.getElementById('uaddress').value;
        var udob=document.getElementById('udob').value;
        var uoccupation=document.getElementById('uoccupation').value;
        var udescription=document.getElementById('udescription').value;
        var uloan_interest=document.getElementById('uloan_interest').value;
        var ucontact=document.getElementById('ucontact').innerHTML;
        $.ajax({
        method:"POST",
        url: "include/updateDetails.php",
        data:{
          info:pageinfo,
          name:ulname,
          city:uscity,
          kyc:ukyc,
          adhaar:uadhaar,
          pan:upan,
          address:uaddress,
          dob:udob,
          occupation:uoccupation,
          description:udescription,
          loan_interest:uloan_interest,
          contact:ucontact
        },
        success: function(data){
          alert(data);
          if(data=="Record updated successfully"){
            location.reload();
          }
        }});    
      }
      function deleteDetails(){
        var contactnum=$("#"+trid+" td:nth-child(13)").text();
        $.ajax({
        method:"POST",
        url: "include/deleteDetails.php",
        data:{
          id:trid,
          contact:contactnum,
          info:pageinfo
        },
        success: function(data){
          alert(data);
          if(data=="Record Deleted successfully"){
            location.reload();
          }
        }});  
        
      }
  </script>
  </body>
</html>
    