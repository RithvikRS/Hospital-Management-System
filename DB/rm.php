<!DOCTYPE html>
<html>
<head>
<title> About </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<header>
</header>
<section>
<article>
<?php
include_once 'DBC.php';
$Rno = $_POST['Rno'];
$sql = "SELECT * FROM rooms where ReID='$Rno';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Room id: " . $row["ReID"]. "    Room Type: " . $row["Rtype"].  "<br>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>
<a href="../Pat.html">Go Back</a>
  </article>
</section>

<footer>

</footer>

</body>
</html>