<html>
<head>
<link rel = "stylesheet" href = "rent.css"
type="text/css">
</head>
<body>

<table id="info">

<?php
$id=$_GET['bid'];

$bid=$id;

include("connect.php"); 

$sql1 ="select email from users,books where books.username=users.username and bid='$id'";
$result1=mysqli_query($conn,$sql1);

$sql2 ="update books set status=\"R\" where bid='$id'";
$result2=mysqli_query($conn,$sql2);

$sql3 ="select * from books where bid='$id'";
$result3=mysqli_query($conn,$sql3);

$row3=mysqli_fetch_assoc($result3);

echo "<div id=\"infoc\"> <img src=\"uploads\\$bid\" id=\"coverI\"></div>";

$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($result3);

echo "<div id=\"disp\"><p class=\"info\">Book Name: ".$row3["bname"]."</p><p class=\"info\">Author: ".$row3["author"]."
</p><p class=\"info\">Genre: ".$row3["bgenre"]."</p><p class=\"info\">Locality of owner: ".$row3["location"]."</p>";

$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

echo "<p class=\"info\">Email ID of owner: ".$row1["email"]."</p></div>";









?>

</table>
</body>
</html>