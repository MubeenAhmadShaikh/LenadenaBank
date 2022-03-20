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
    <title>LenaDenaBank | Party</title>
    <link href="css/app.css" rel="stylesheet" />
    
  </head>
  <!-- <script src="js/jquery.min.js"></script>  -->

  <body>
    <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <main class="content">
          <div class="container-fluid p-0">
          <div class="d-flex flex-row justify-content-between">

            <h1 class="h3 mb-3">Party</h1>

            <div class="card-actions float-end">
                <div class="dropdown position-relative">
                <div class="input-group input-group-navbar">
                <input id="myInput" type="text" class="form-control me-4" placeholder="Search…" aria-label="Search">
                        <a class="btn btn-primary " href="add_party.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Party</a>
                      </div>
                
                </div>
                </div>  
            </div>
            <div class="row">
              <div class="col-xl-12 partyTable">
                <div class="card">
                  <div class="card-header pb-0">
                    
                  </div>
                  <div class="card-body">
                    <table class="table table-striped" style="width: 100%" id="test">
                      <thead>
                        <tr >
                          

                      <th>Acc. No.</th>
											<th>Name</th>
											<th>Balance</th>
											<th>Agent</th>
											<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="test2">
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
                      <tr class="party" id="<?php echo $row['account_number']; ?>">
                          <td><?php echo $row['account_number'];?></td>
                          <td><?php echo $row['pname']; ?></td>
                          <td><?php echo $row['total_balance']; ?></td>
                          <td><?php echo $row['agent_id'];?></td>
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
                          <td class="d-none" ><?php echo $row['account_opening_date']; ?></td>
                          <td class="d-none" ><?php echo $row['interest']; ?></td>
                          <td class="d-none" ><?php echo $row['gender']; ?></td>

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
                    
                    <h5 class="card-title mb-0">Party Details</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-sm  mb-4">
                      <tbody>
                      
                        <tr>
                          <th>Account Number</th>
                          <td id="account_number"></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td id="pname"></td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td id="contact"></td>
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td id="gender"></td>
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
                          <th>Current Balance</th>
                          <td id="total_balance"></td>
                        </tr>
                        <tr>
                          <th>Interest</th>
                          <td id="party_interest"></td>
                        </tr>
                        <tr>
                          <th>Account Opened On</th>
                          <td id="acc_open_date"></td>
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
                          <th>Account Number</th>
                          <td id="uaccount_number"></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td><input type="text" class="form-control" id="upname"></td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td id="ucontact"></td>
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td >
                            <select class="form-select" aria-label="Default select example" name="gender" id="ugender">
                              <option selected>Select gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </td>
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
                          <th>Current Balance</th>
                          <td id="utotal_balance"></td>
                        </tr>
                        <tr>
                          <th>Interest</th>
                          <td ><input type="text" class="form-control" id="uparty_interest"></td>
                        </tr>
                        <tr>
                          <th>Account Opened On</th>
                          <td id="uacc_open_date"></td>
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
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="updateParty()">Update</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="editModal" data-bs-toggle="modal" data-bs-target="#editModal">Cancel</button>
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
      var bid, trid;
      function dataFetch(){
        // Documnet populating Side Card
        document.getElementById('account_number').innerHTML=$("#"+trid+" td:nth-child(1)").text();
        document.getElementById('pname').innerHTML=$("#"+trid+" td:nth-child(2)").text();
        document.getElementById('total_balance').innerHTML=$("#"+trid+" td:nth-child(3)").text();
        document.getElementById('agent_name').innerHTML=$("#"+trid+" td:nth-child(4)").text();
        document.getElementById('scity').innerHTML=$("#"+trid+" td:nth-child(5)").text();
        document.getElementById('kyc').innerHTML=$("#"+trid+" td:nth-child(6)").text();
        document.getElementById('adhaar').innerHTML=$("#"+trid+" td:nth-child(7)").text();
        document.getElementById('pan').innerHTML=$("#"+trid+" td:nth-child(8)").text();
        document.getElementById('address').innerHTML=$("#"+trid+" td:nth-child(9)").text();
        document.getElementById('agent_com').innerHTML=$("#"+trid+" td:nth-child(10)").text();
        document.getElementById('contact').innerHTML=$("#"+trid+" td:nth-child(11)").text();
        document.getElementById('dob').innerHTML=$("#"+trid+" td:nth-child(12)").text();
        document.getElementById('occupation').innerHTML=$("#"+trid+" td:nth-child(13)").text();
        document.getElementById('description').innerHTML=$("#"+trid+" td:nth-child(14)").text();
        document.getElementById('acc_open_date').innerHTML=$("#"+trid+" td:nth-child(15)").text();
        document.getElementById('party_interest').innerHTML=$("#"+trid+" td:nth-child(16)").text();
        document.getElementById('gender').innerHTML=$("#"+trid+" td:nth-child(17)").text();
        
        //Document populating update modal
        document.getElementById('uaccount_number').value=$("#"+trid+" td:nth-child(1)").text();
        document.getElementById('upname').value=$("#"+trid+" td:nth-child(2)").text();
        document.getElementById('utotal_balance').innerHTML=$("#"+trid+" td:nth-child(3)").text();
        document.getElementById('uagent_name').innerHTML=$("#"+trid+" td:nth-child(4)").text();
        document.getElementById('uscity').value=$("#"+trid+" td:nth-child(5)").text();
        document.getElementById('ukyc').value=$("#"+trid+" td:nth-child(6)").text();
        document.getElementById('uadhaar').value=$("#"+trid+" td:nth-child(7)").text();
        document.getElementById('upan').value=$("#"+trid+" td:nth-child(8)").text();
        document.getElementById('uaddress').value=$("#"+trid+" td:nth-child(9)").text();
        document.getElementById('uagent_com').innerHTML=$("#"+trid+" td:nth-child(10)").text();
        document.getElementById('ucontact').innerHTML=$("#"+trid+" td:nth-child(11)").text();
        document.getElementById('udob').value=$("#"+trid+" td:nth-child(12)").text();
        document.getElementById('uoccupation').value=$("#"+trid+" td:nth-child(13)").text();
        document.getElementById('udescription').value=$("#"+trid+" td:nth-child(14)").text();
        document.getElementById('uacc_open_date').innerHTML=$("#"+trid+" td:nth-child(15)").text();
        document.getElementById('uparty_interest').value=$("#"+trid+" td:nth-child(16)").text();
        document.getElementById('ugender').value=$("#"+trid+" td:nth-child(17)").text();
      }
      var flag;
      $(function() {
          $('#test tr').click(function() {
              trid = $(this).attr('id');
              dataFetch();
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
    var pageinfo="party";
    function updateParty(){
        var upname=document.getElementById('upname').value;
        var uscity=document.getElementById('uscity').value;
        var ukyc=document.getElementById('ukyc').value;
        var uadhaar=document.getElementById('uadhaar').value;
        var upan=document.getElementById('upan').value;
        var uaddress=document.getElementById('uaddress').value;
        var udob=document.getElementById('udob').value;
        var uoccupation=document.getElementById('uoccupation').value;
        var udescription=document.getElementById('udescription').value;
        var uparty_interest=document.getElementById('uparty_interest').value;
        var ugender=document.getElementById('ugender').value;
        var ucontact=document.getElementById('ucontact').innerHTML;
        $.ajax({
        method:"POST",
        url: "include/updateDetails.php",
        data:{
          info:pageinfo,
          name:upname,
          city:uscity,
          kyc:ukyc,
          adhaar:uadhaar,
          pan:upan,
          address:uaddress,
          dob:udob,
          occupation:uoccupation,
          description:udescription,
          party_interest:uparty_interest,
          gender:ugender,
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
        var contactnum=$("#"+trid+" td:nth-child(11)").text();
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
