<?php
		session_start();

$_SESSION['flag']=0;
$_SESSION['bid']="";



include("connect.php"); 



$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$date = $_POST['Year']."-". $_POST['Month']."-".$_POST['Day'];
$date = mysqli_real_escape_string($conn, $date);  //Since data type is date
$gender = $_POST["Gender"];
$address = $_POST["Address"];
$email = $_POST["Email"];
$uname = $_POST["Usernm"];
$pwd = $_POST["Password"];
$pref=implode(',', $_POST['p']); // To store multiple checkbox entries


$sql1="select * from users where username='$uname'";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)!=0)
{
		echo '<script type="text/javascript">alert("User name not valid");</script>';
}
 

$sql="insert into users values ('$fname','$lname','$date','$gender','$address','$email','$uname','$pwd','$pref')";

if($conn-> query($sql)=== TRUE)
{
        echo '<script type="text/javascript">alert("Thank you for registering!");</script>';
		$_SESSION['uname']=$uname; 
		header("Location:session.php");
}
else
{
        echo '<script type="text/javascript">alert("Unsuccessful");</script>';
		session_destroy();
}  

?>