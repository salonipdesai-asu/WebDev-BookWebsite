<?php
session_start();
if (isset($_SESSION['uname'])) 
{
	session_unset(); 

	session_destroy(); 
}
?>
<html>
<head>
<link rel = stylesheet href = "trial.css"
type="text/css">
<link rel = stylesheet href = "f.css"
type="text/css">

<script>
function alert1()
{
alert("You must log in or sign up to continue");
}
</script> 

</head>
<body>
<canvas id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>
<script type="text/javascript" language="JavaScript" src="trial1.js"></script>

<div id="header">

<p id="title">Rent-A-Book</p>
<p id="subh">Reading gives us some place to go, when we don't want to stay where we are.</p>
<p id="topright"> <a class="tr" href ="loginH.php">Login</a> | <a class="tr" href ="signupH.php">Sign Up </a></p>
</div>


<div id="main">
<?php include("signup.php"); ?>

</div>

<div id="left">
<ul id="menu" align =left><br>
  <li><a class="list" href ="trial2.php">HOME</a></li><br>
  <li><a class="list" href="javascript:alert1()">ALL</a></li><br>
  <li><a class="list" href="javascript:alert1()">FICTION</a></li><br>
  <li><a class="list" href="javascript:alert1()">NON-FICTION</a></li><br>
  <li><a class="list" href="javascript:alert1()">ROMANCE</a></li><br>
  <li><a class="list" href="javascript:alert1()">MYSTERY</a></li><br>
  <li><a class="list" href="javascript:alert1()">SELF HELP</a></li><br>
  <li><a class="list" href="javascript:alert1()">DRAMA</a></li><br>
  <li><a class="list" href="javascript:alert1()">COMICS</a></li><br>
  <li><a class="list" href="javascript:alert1()">CLASSICS</a></li><br>
  <li><a class="list" href="javascript:alert1()">FANTASY</a></li><br>
  <li><a class="list" href="javascript:alert1()">REFERENCE</a></li><br>
</ul>
</div>

<div id="footer"> <text id="cr">&#169; Copyright 2017-18. ABC Book Services Pvt. Ltd.</text>
<a href="contactH.php" id="fc" >Contact Us</a>
<a href="FAQsH.php" id="faq">FAQs</a>
</div>

</body>
</html>

