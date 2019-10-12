<?php
include_once 'DBC.php';

$EID = $_POST['EID'];
$NNAME = $_POST['NName'];
$ADDR = $_POST['EAddress'];
$ECNo = $_POST['ECNo'];
$EJOB = $_POST['EJob'];
$ESal = $_POST['ESal'];
$PID = $_POST['PID'];

$sql = "INSERT INTO doctor ( EID, NNAME, PID ) VALUES ('$EID', '$NNAME', '$PID');";

$sql1 = "INSERT INTO employee (EID, EName, EAddress, ECNo, EJob, ESal) values ( '$EID', '$NNAME', '$ADDR', '$ECNo', '$EJOB', '$ESal');";

mysqli_query( $conn, $sql);

mysqli_query( $conn, $sql1);

header("Location: ../Nurse.html?Enter=success");