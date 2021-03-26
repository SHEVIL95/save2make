<?php
include "work.php";
include "connect.php";
include("mail.php");
$res=register($con,$mail);
?>

<html>
<head>
<?php include("header.php");?>
<center>
<div id="come1">			
<div id="form1">
<form method="POST" action="signup.php" enctype="multipart/form-data">
<p><strong><font color="black"><u>SIGN UP FORM</u></font></strong></p>
<table>
	<tr>
		<td><label> Name *: </label></td>
		<td><input type="text" name="name" class="inputFields" required /></td>
	</tr>
	<tr>
		<td><label>Email *: </label></td>
		<td><input type="text" name="email" class="inputFields" required /></td>
	</tr>
	<tr>
		<td><label>Password *: </label></td>
		<td><input type="password" name="password" class="inputFields" required /></td>
	</tr>
	<tr>
		<td><label>Re-enter Password *: </label></td>
		<td><input type="password" name="passwordconfirm" class="inputFields" required/></td>
	</tr>
	<tr>
		<td><label>Occupation *: </label></td>
		<td><input type="text" name="occupation" class="inputFields" required /></td>
	</tr>
	<tr>
		<td><label>Gender *:</label></td>
		<td><select name="g">
			<option value="M">Male</option>
			<option value="F">Female</option>
			</select></td>
	</tr>
	<tr>
		<td><label>Birthday *:</label></td>
		<td><pre style="font-size:10px"><input type="text" name="birthday" class="inputFields" required/> Example:06/12/1996</pre></td>
	</tr>
</table>
<input type="checkbox" name="terms" required/>I agree with terms and conditions.<br><br/>
<input type="submit"  name="submit" class="thebuttons"/><br><br/>

<?php
echo $res;
?>

</div>
</div>
</center>
</body>
<?php include("footer.php");?>
</html> 