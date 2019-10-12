<?php
include_once 'DBC.php';

$ReID = $_POST['ReID'];
$RoNo = $_POST['RoNo'];
$RType = $_POST['RType'];
$PID = $_POST['PID'];
$EID = $_POST['EID'];
$EType = $_POST['EType'];

$sql = "INSERT INTO rooms ( ReID, RoNo, Rtype, PID, EID, EType ) VALUES ('$ReID', '$RoNo', '$RType', 'PID', 'EID', 'EType');";

mysqli_query( $conn, $sql);

header("Location: ../Rooms.html?Enter=success");