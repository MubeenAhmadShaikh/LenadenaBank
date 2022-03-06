<?php
include('connection.php');
session_start();

?>
<?php
if (isset($_POST['submit'])) {
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['pass']);
  $select_user="SELECT * from login WHERE email='$email' AND pass='$password'";
  $run_user=mysqli_query($con,$select_user);
  $check_user=mysqli_num_rows($run_user);

  if (check_user) {


  if ($check_user>0) {
    $_SESSION['email']=$email; 
    header('Location:index2.php');
  }
  else{
    echo "<script>alert('wrong username or password')</script>";
  }
  }
}

?>