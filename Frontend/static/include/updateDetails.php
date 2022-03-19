<?php
    $servername = "localhost:3406";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $info=mysqli_real_escape_string($conn,$_POST['info']);
    if($info=="party"){
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
    } 
    elseif($info=="loan"){
        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $city= mysqli_real_escape_string($conn,$_POST['city']);
        $kyc= mysqli_real_escape_string($conn,$_POST['kyc']);
        $adhaar= mysqli_real_escape_string($conn,$_POST['adhaar']);
        $pan= mysqli_real_escape_string($conn,$_POST['pan']);
        $address= mysqli_real_escape_string($conn,$_POST['address']);
        $dob= mysqli_real_escape_string($conn,$_POST['dob']);
        $occupation= mysqli_real_escape_string($conn,$_POST['occupation']);
        $description= mysqli_real_escape_string($conn,$_POST['description']);
        $loan_interest= mysqli_real_escape_string($conn,$_POST['loan_interest']);
        $contact= mysqli_real_escape_string($conn,$_POST['contact']);

        $querry="UPDATE loan SET `lname`='$name',`dob`='$dob',`address`='$address',`kyc`='$kyc',`adhar_number`='$adhaar',`pan_card`='$pan',
        `city`='$city',`occupation`='$occupation',`discription`='$description',`loan_interest`='$loan_interest' WHERE `contact_num`='$contact';";                 
        if ($conn->query($querry) === TRUE) {
            echo 'Record updated successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    }       
    elseif($info=="agent"){
        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $kyc= mysqli_real_escape_string($conn,$_POST['kyc']);
        $adhaar= mysqli_real_escape_string($conn,$_POST['adhaar']);
        $pan= mysqli_real_escape_string($conn,$_POST['pan']);
        $dob= mysqli_real_escape_string($conn,$_POST['dob']);
        $contact= mysqli_real_escape_string($conn,$_POST['contact']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $agentid=mysqli_real_escape_string($conn,$_POST['agentid']);
        $querry="UPDATE agent SET `aname`='$name',`kyc`='$kyc',`adhaar_number`='$adhaar',`pan_number`='$pan',`dob`='$dob',
        `gender`='$gender' WHERE `contact_num`='$contact' AND `agent_id`='$agentid';";
        if ($conn->query($querry) === TRUE) {
            echo 'Record updated successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    }     
?>