<?php
include("connect.php"); 

$uname = $_POST["UserName"];
$pwd = $_POST["Password"];

$sql ="select * from users where username='$uname' and password='$pwd'";

$result=mysqli_query($conn,$sql);


$count=mysqli_num_rows($result);

if ($count==1) {
		echo '<script type="text/javascript">alert("Successful!");</script>';
		session_start();
		$_SESSION['uname']=$uname; // You can set the value however you like.
		$_SESSION['flag']=0;
		$_SESSION['bid']="";

		header("Location:session.php");
} 

else {
		echo '<script type="text/javascript"> window.location.href=\'loginH.php\';
alert("Invalid username or password");</script>';
	

}

?>