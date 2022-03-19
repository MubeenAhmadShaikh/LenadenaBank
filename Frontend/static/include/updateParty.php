<?php
    $servername = "localhost:3406";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $city= mysqli_real_escape_string($conn,$_POST['city']);
    $kyc= mysqli_real_escape_string($conn,$_POST['kyc']);
    $adhaar= mysqli_real_escape_string($conn,$_POST['adhaar']);
    $pan= mysqli_real_escape_string($conn,$_POST['pan']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $dob= mysqli_real_escape_string($conn,$_POST['dob']);
    $occupation= mysqli_real_escape_string($conn,$_POST['occupation']);
    $description= mysqli_real_escape_string($conn,$_POST['description']);
    $party_interest= mysqli_real_escape_string($conn,$_POST['party_interest']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $contact= mysqli_real_escape_string($conn,$_POST['contact']);

    $querry="UPDATE party SET `pname`='$name',`gender`='$gender',`dob`='$dob',`address`='$address',`kyc`='$kyc',`adhar_number`='$adhaar',`pan_card`='$pan',
    `city`='$city',`occupation`='$occupation',`discription`='$description',`interest`='$party_interest' WHERE `contact_num`='$contact';";                 
    if ($conn->query($querry) === TRUE) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . $conn->error;
    }             
?>