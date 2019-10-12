<?php
include_once 'DBC.php';

$RNo = $_POST['Rno'];
$PID = $_POST['PID'];
$EID = $_POST['EID'];
$EType = $_POST['EType'];
$RDetails = $_POST['RDetails'];

$sql = "INSERT INTO records ( RNo, PID, EID, EType, RDetails ) VALUES ('$RNo', '$PID', '$EID', 'EType', 'RDetails');";

mysqli_query( $conn, $sql);



header("Location: ../Records.html?Enter=success");