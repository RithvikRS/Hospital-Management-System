<?php
include_once 'DBC.php';

$RID = $_POST['RID'];
$PID = $_POST['PID'];
$Quantity = $_POST['Quantity'];
$MName = $_POST['MName'];

$sql = "INSERT INTO medicines ( RID, PID, Quantity, MName ) VALUES ('$RID', '$PID', '$Quantity', 'MName');";

mysqli_query( $conn, $sql);



header("Location: ../Medicines.html?Enter=success");