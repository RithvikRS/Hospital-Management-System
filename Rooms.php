<?php
include_once 'DBC.php';

$ReID = $_POST['ReID'];
$RType = $_POST['RType'];
$EID = $_POST['EID'];

$sql = "INSERT INTO rooms ( ReID, Rtype, EID) VALUES ('$ReID', '$RType', '$EID');";

mysqli_query( $conn, $sql);

header("Location: ../Rooms.html?Enter=success");