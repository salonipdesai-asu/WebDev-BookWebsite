<html>
<head>
<title> FORM
</title>

<script>
function validate() 
{
	var check= true;
    var x = document.forms["loginForm"]["UserName"].value;
    if (x == "" || x== null) 	
	{
        alert("User Name must be filled out");
		check= false;
	}
    var y = document.forms["loginForm"]["Password"].value;
	if (y == "" || y == null) 
	{
        alert("Password must be filled out");
		check= false;
	}

	return check;
} 

</script>

<link rel = stylesheet href = "f.css"
type="text/css">
</head>

<body>
<div id="form">
<form name="loginForm" onsubmit="return validate()" method="post" id="login" action="loginP.php"><table>

<tr><th>User Name:</th><td><input type="text" onclick="this.focus();this.select()" name="UserName" value=""></input></td></tr>
<tr><th>Password: </th><td><input type="password" name="Password" value=""></input></td></tr>
<tr><td><input type="reset" class="button" name="res" value="Reset"></input></td>
<td><input type="submit" class="button" name="sub" value="Submit"></input></td></tr>
</table>
</form>
</div>
</body>
</html>




