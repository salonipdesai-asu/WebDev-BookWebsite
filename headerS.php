<?php
$uname=$_SESSION['uname'];
?>


<html>
<head>
<link rel = stylesheet href = "trial.css"
type="text/css">
</head>

<body>
<p id="title">Rent-A-Book</p>
<p id="subh">Reading gives us some place to go, when we don't want to stay where we are.</p>
<div id="uname"><?php echo $uname;?></div><p id="toprightS"> | <a  href="http://localhost/Trial/Exp/trial2.php" id="lg"> Logout </a></p>

</body>
</html>
