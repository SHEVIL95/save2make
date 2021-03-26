<?php
session_start();
include "work.php";
include "connect.php";
$a=" ";
$res=register2($con);

if($res!="Success"){
	
 $a=$res;
}
else{
	$_SESSION['Email'] = $_POST['email'];

	header('Location: info.php');
}
?>
<html>
<head>
<?php include("header.php");?>
<body>
<div style="width:30%; height:30%; margin:150px auto;  border:solid 5px #666; background: white; ">
    <div style="line-height:50px; text-indent:18px;color:white; font-size:14px;font-family:arial;background: #970202;font-weight:bold; ">LOGIN &nbsp;TO&nbsp; YOUR&nbsp; ACCOUNT
</div>	
	<form method="POST" action="login.php">
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
				<?php
				echo $a;
				?>
				</td>
			</tr></table>
	</form>
</div>
<?php include("footer.php");?>
</body>

</head>
</html>