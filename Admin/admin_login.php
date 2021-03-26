<?php

if(isset($_POST['submit']))
{
	$name=$_POST['email'];
	$pass=$_POST['password'];		

		if($name=="admin" && $pass=="admin")
		{
			$_SESSION["email"] = $row['email'];
			header('Location:admin_home.php' );
		}
		else
		{ 
			?>
			<script type="text/javascript"> 
			    alert("your id or password is invalid"); 
			</script>

			<?php
		}
		
}
?>

<html>
<head>
<?php include("admin_header0.php");?>
<body>
<div style="width:30%; height:30%; margin:150px auto;  border:solid 5px #666; background: white; ">
    <div style="line-height:50px; text-indent:18px;color:white; font-size:14px;font-family:arial;background: #970202;font-weight:bold; ">LOGIN &nbsp;TO&nbsp; YOUR&nbsp; ACCOUNT
</div>	
	<form method="POST" action="admin_login.php">
		<table width="100%">
			<tr>
				<td>Email-Id:</td>
				<td></td>
				<td><input type="text" name="email" class="inputFields" required /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td></td>
				<td><input type="password" name="password" class="inputFields" required/></td>
			</tr>
			<br>
			<tr>
			<td></td>
				<td></td>
			<td><input type="submit" class="thebuttons" name="submit" value="Login" />
				</td>
			</tr></table>
	</form>
</div>
<?php include("admin_footer.php");?>
</body>

</head>
</html>