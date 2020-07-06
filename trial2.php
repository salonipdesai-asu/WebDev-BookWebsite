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
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

<link rel = stylesheet href = "trial.css"
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

<img src="1.jpg" id="pic"></img>
<div id="intro"><div id="introT"><p>Here at Rent-A-Book, <br>We provide a convenient and cost-effective platform for book lovers to explore their interest.<br>
You can: <br>1. Upload the details of the book that you would like to give on rent.<br>2. Choose a book to take on rent from amongst our collection.
<h2>Rules</h2>1. Each book is rented at a minimal rate of Rs. 50 per book.<br>2. An Email-ID will be provided for you to contact the owner of the book.<br> 3. After 30 days, the owner of the book is eligible to collect a fine of Rs. 20 per day.<br>4. Each book can be rented for a maximum of 30 days.</p></div></div>

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

