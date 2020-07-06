<?php
		session_start();
		if(!isset($_SESSION['uname']))
		{
			
			header("Location:loginH.php");
		
		}
		if($_SESSION['flag']==1)
		{
			echo '<script type="text/javascript">alert("Thank you! Your book has been added successfulyy.");
						</script>';
			$_SESSION['flag']=0;
		}
		
?>

<html>
<head>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

<link rel = stylesheet href = "trial.css"
type="text/css">
<style>


</style>

</head>
<body>
<canvas id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>

<script type="text/javascript" language="JavaScript" src="trial1.js">
</script>

<div id="header" align="center">
<?php include("headerS.php"); ?>
</div>

<div id="main" align="center">
<?php include("main.php"); ?>
</div>


<div id="left" align="center">
<?php include("list.php"); ?>
</div>

<div id="footer">
<?php include("footer.php"); ?>
</div>



</body>
</html>