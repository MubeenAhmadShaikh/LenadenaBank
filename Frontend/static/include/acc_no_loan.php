<?php
    $servername = "localhost:3406";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `lname`,`loan_id` FROM loan";
    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $a = array($row["lname"],$row["loan_id"]);
        array_push($data, $a);
    }
    echo json_encode($data);
?>