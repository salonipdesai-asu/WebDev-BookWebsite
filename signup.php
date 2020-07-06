<html>
<head>
<title> FORM
</title>

<script>
function validate() 
{
	var check= true;
    var x = document.forms["myForm"]["FirstName"].value;
    if (x == "" || x== null || x=="First Name") 	
	{
        alert("First Name must be filled out");
		check= false;
	}
    var y = document.forms["myForm"]["LastName"].value;
	if (y == "" || y == null || y =="Last Name") 
	{
        alert("Last Name must be filled out");
		check= false;
	}

	/*var mail=document.forms["myForm"]["Email"].value;
	var mailid=  /^[0-9a-zA-Z]+@[0-9a-zA-Z]+[\.]{1}[0-9a-zA-Z]+[\.]?[0-9a-zA-Z]+$/;
	if((!(mail.match(mailid))) || (mail=="abc@example.com"))
	{
		alert("Invalid email ID.");
		check= false;
	}*/
	var x = document.forms["myForm"]["Address"].value;
    if (x == "" || x== null) 	
	{
        alert("Address must be filled out");
		check= false;
	}
	
	var passwrd = document.forms["myForm"]["Password"].value;
	var passw=  /^[0-9A-Za-z]\w{6,15}$/;

	if(!(passwrd.match(passw)) )
	{
		alert("Alphanumeric characters only for password, length 7-15");
		check= false;
	}
	
	/*if(check==true)
	{
		alert("Thank you for registering! \nPlease check your email inbox for a confirmation mail within 12 hours!")
	}*/
	
	return check;
} 

</script>

<link rel = stylesheet href = "f.css"
type="text/css">
</head>

<body>
<div id="form">
<form name="myForm" onsubmit="return validate()" method="post" action="signupP.php"><table>
<tr><th>Name:</th><td><input type="text" onclick="this.focus();this.select()" name="FirstName" value="First Name"></input></td>
 <td><input type="text" onclick="this.focus();this.select()" name="LastName" value="Last Name"></input><br><p id="p1"></p></td><td></td></tr>
<tr><th>Date of Birth: </th><td><select name="Day" value="Day">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option></select></td>
<td><select name="Month" value="Month">
		<option value="01">January</option>
		<option value="02">Febuary</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option></select></td>
<td><select name="Year" value="Year">
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option></select></td></tr>
	



<tr><th>Gender:</th><td> <input type="radio" name="Gender" value="F" checked>Female</input></td>
<td><input type="radio" name="Gender" value="M" >Male</input></p></td><td></td></tr>
<tr><th>Address:</th><td colspan="2"><textarea name="Address" value="address" cols="50" rows="5"></textarea></td><td></td></tr>
<tr><th>Email ID:</th> <td><input type="email" onclick="this.focus();this.select()" name="Email" value="abc@example.com"></input></td><td></td><td></td></tr>
<tr><th>Username: </th><td><input type="text" name="Usernm" value=""></input><br></td><td></td><td></td></tr>
<tr><th>Password: </th><td><input type="password" name="Password" value=""></input></td><td></td><td></td></tr>
<tr><th>Choose your favourite genre of books: </th>
<td><input type="checkbox" name="Fiction" value="Drama"> Fiction </input><br>
<input type="checkbox" name="NonFiction" value="Drama"> Non-Fiction </input><br>
<input type="checkbox" name="p[]" value="Romance"> Romance </input><br>
<input type="checkbox" name="p[]" value="Mystery"> Mystery </input><br>
<input type="checkbox" name="p[]" value="Self Help"> Self Help </input><br>
<input type="checkbox" name="p[]" value="Travel"> Drama </input><br>
<input type="checkbox" name="p[]" value="Comics"> Comics </input><br>
<input type="checkbox" name="p[]" value="Classics"> Classics </input><br>
<input type="checkbox" name="p[]" value="Fantasy"> Fantasy </input><br>
<input type="checkbox" name="p[]" value="Reference"> Reference </input><br><br></td><td></td><td></td><tr></table>
<input type="reset" class="button" name="res" value="Reset"></input>
<input type="submit" class="button" name="sub" value="Submit"></input>
</form>
</div>
</body>
</html>




