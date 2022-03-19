
<?php
/* Database connection */
$servername = "localhost:3406";
$username = "root";
$password = "";
$dbname = "bank";
date_default_timezone_set('Asia/Calcutta');

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connot connect to the database: %s\n", mysqli_connect_error());
    exit();
}
?>