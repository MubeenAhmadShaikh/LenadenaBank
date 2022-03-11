<?php
    $servername = "localhost:3406";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `pname`,`account_number` FROM party";
    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $a = array($row["pname"],$row["account_number"]);
        array_push($data, $a);
    }
    echo json_encode($data);
?>