<?php
		session_start();
		if(!isset($_SESSION['uname']))
		{
			
			header("Location:loginH.php");
		
		}
		
?>
<html>
<head>
<link rel = stylesheet href = "trial.css"
type="text/css">


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
<?php include("nonfiction.php"); ?>
</div>


<div id="left" align="center">
<?php include("list.php"); ?>
</div>

<div id="footer">
<?php include("footer.php"); ?>
</div>



</body>
</html>