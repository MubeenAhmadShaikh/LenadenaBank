<?php
    $servername = "localhost:3406";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id= mysqli_real_escape_string($conn,$_POST['id']);
    $contact= mysqli_real_escape_string($conn,$_POST['contact']);
    $pageinfo= mysqli_real_escape_string($conn,$_POST['info']);
    if($pageinfo=="loan"){
        $querry="DELETE FROM loan WHERE `loan_id`='$id' AND `contact_num`='$contact';";
        if ($conn->query($querry) === TRUE) {
            echo 'Record Deleted successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    }
    elseif($pageinfo=="party"){
        $querry="DELETE FROM party WHERE `account_number`='$id' AND`contact_num`='$contact';";
        if ($conn->query($querry) === TRUE) {
            echo 'Record Deleted successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    }
    elseif($pageinfo=="agent"){
        $querry="DELETE FROM agent WHERE `agent_id`='$id' AND`contact_num`='$contact';";
        if ($conn->query($querry) === TRUE) {
            echo 'Record Deleted successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    }              
?>