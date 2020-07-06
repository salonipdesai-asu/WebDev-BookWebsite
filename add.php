
<html>
<head>
<title> ADD A BOOK
</title>
<script>
function validate() {

var check= true;
    var x = document.forms["myForm"]["Title"].value;
    if (x == "" || x== null) {
        alert(" Book Title is required.");
        check = false;
}
    var y = document.forms["myForm"]["Author"].value;
 if (y == "" || y == null ) {
        alert("Author's name is required.");
        check = false;}

return check;
    
} 

</script>


<link rel = stylesheet href = "f.css"
type="text/css">

</head>

<body>

<h2>ADD A BOOK</h2>
<table id="add">
<form name="addForm" onsubmit=" return validate()" action="addP.php" method="post" enctype="multipart/form-data">
<tr>
<th>Book Title</th> <td><input type="text" name="Title" value="" ></input></tr>
<tr>
<th>Author</th><td><input type="text" name="Author" value=""></input></td>
</tr>
 <tr><th>
Upload the Cover</th><td><input type = "file" name = "pic" id="pic"></td></tr>
<tr>
<th>Genre</th><td>
<select name="Genre" value="Genre">
		<option value="Fiction">Fiction</option>
		<option value="Non Fiction">Non Fiction </option>
		<option value="Drama">Drama </option>
		<option value="Science Fiction">Science  Fiction</option>
		<option value="Mystery">Mystery</option>
        <option value="Classics">Classics</option>
		<option value="Comics">Comics</option>
 		<option value="Romance">Romance</option>
		<option value="Self Help">Self Help</option>
		<option value="Fantasy">Fantasy</option>
		<option value="Reference">Reference</option>	
		</select></td></tr>
<br>

<tr><th>	
Locality </th><td><p>
<select name="Locality" value="Locality">
		<option value="South Bombay">South Bombay</option>
		<option value="Western Suburbs">Western Suburbs </option>
		<option value="Central Suburbs">Central Suburbs</option>

		</select></p></td>
</tr>
 


<tr>
<td colspan="2">
<input type="reset" class="button" name="res" value="RESET"></input>
<input type="submit" class="button"name="submit" value="SUBMIT"></input>
</td></tr>
</form>
</table>
</body>



