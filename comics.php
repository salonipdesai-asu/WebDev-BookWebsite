<html>
<head>
<link rel = "stylesheet" href = "display.css"
type="text/css">
<script src="jquery-3.2.1.min.js"></script>
</head>

<body>

<?php
include("connect.php"); 
$genre="Comics";

$sql="Select * from books where bgenre='$genre' and status='A'";

$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

?>

<table id="display">

<?php
for($i=0;$i<$count;$i++)
{
	$row=mysqli_fetch_assoc($result);
	$loc[$i]=$row["bid"];
	$loc[$i]="uploads\\".$loc[$i];
}
$i=0;
$result=mysqli_query($conn,$sql);




$r=0;
if($count>0)
{
	
        while($row=mysqli_fetch_assoc($result))
        {
				echo "<tr><td><img src=$loc[$i] id=\"cover\"></td><td><p class=\"infoT\">Book name: ".$row["bname"]."</p><p class=\"infoT\">Author: ".$row["author"]."</p>
				<p class=\"infoT\">Genre: ".$row["bgenre"]."</p><p class=\"infoT\">Locality of owner: ".$row["location"]."</p></td>
				<td><button class=\"rent\" id=\"".$row["bid"]."\">Rent</button></td>
				</tr>";
				$i++;
				
        }
}

function set($bid1)
{
					$_SESSION['bid']=$bid1;
}
?>
</table>
<script type="text/javascript">
	$('.rent').click(function(){
		var a=$(this).attr('id');
		if (confirm("Confirm?") == true) {
			window.location.href="rentH.php?bid="+a;    } 
		else {
			window.location.href="comicsH.php";    }	
	});
</script>
</body>
</html>

