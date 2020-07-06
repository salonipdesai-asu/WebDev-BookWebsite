<?php
session_start();
$uname=$_SESSION['uname'];
$_SESSION['flag']=0;
include("connect.php"); 

$bname = $_POST["Title"];
$author = $_POST["Author"];
$bgenre = $_POST["Genre"];
$locality = $_POST["Locality"];

$bid=random(6);
$target_dir = "uploads/";
$target_file = $target_dir.$bid;
$uploadOk = 1;
$status="A";

//$imageFileType = pathinfo(basename($_FILES["addForm"]["pic"]),PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) 
	{
        $uploadOk = 1;
    } else 
	{
			echo '<script type="text/javascript">alert("File is not an image");</script>';        
			$uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) 
{
    $uploadOk = 0;
}

// Check file size
if ($_FILES["pic"]["size"] > 500000) 
{
	echo '<script type="text/javascript">alert("File is too large.");</script>';
    $uploadOk = 0;
}

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) 
{
echo '<script type="text/javascript">alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script>';
    $uploadOk = 0;
}*/

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
	echo '<script type="text/javascript">alert("Sorry, your file was not uploaded.");</script>';
}

// if everything is ok, try to upload file
else 
{
	$sql="insert into books values ('$bname','$author','$bgenre','$locality','$bid','$uname','$status')";
    if ((move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file))&&($conn-> query($sql)=== TRUE) )
	{
			header("Location:session.php");
			echo '<script type="text/javascript">alert("Thank you! Your book has been added successfulyy.");
						</script>';
			$_SESSION['flag']=1;
	}
	else
	{
		echo '<script type="text/javascript">alert("Sorry, there was an error uploading your file.");</script>';
	} 	
		
    
	
}

function random($length)
{
	$keyspace='0123456789';
	$str='B';
	$max='9';
	for($i=0;$i<$length;$i++)
	{
		$str.= $keyspace[random_int(0,$max)];
	}
	return $str.".jpg";
	
}
?>