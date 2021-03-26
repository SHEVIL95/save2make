<?php

session_start();
include("connect.php");
include("work.php");

if(isset($_SESSION['Email'])) {
$email=$_SESSION['Email'];
$name=mysqli_query($con,"SELECT Name FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];
}

$r=infom($con,$email);

?>

<!DOCTYPE html>
<html>
<head>
	<title>save2make Donations</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<meta charset="utf-8">
	<link rel ="stylesheet" href="css/style.css">
<body style="background:#eeeeee; margin:0px;">

	<div style="width:100%; height:50px; background:#cc0000; margin-bottom: 0px;">
		<div style="width:400px; line-height:50px; text-indent:18px;float:left;color:white; font-size:24px;font-family:arial;">
			<a href="#" style="color:white; text-decoration: none;">save2make</a>
		</div>
		<div style=" line-height:50px; text-indent:18px;float:left;color:white; font-size:14px;font-family:arial;">
				<a class="hyper"  href="index.php" >HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="hyper"  href="ngo.php">PARTNERS</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="hyper"  href="about.php" >ABOUT PROJECT</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="hyper"  href="signup.php">JOIN US</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a  class="hyper" href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a  class="hyper" href="login.php">DONATE</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>

			<div style=" line-height:50px; text-indent:18px;float:right;color:white; font-size:14px;font-family:tahoma;">	

				Welcome,&nbsp;<span style="color:#ffffff; text-transform: uppercase; font-size:120%;"><?php echo $n;?></span><a href="logout.php"  style="color:white; text-decoration: none;font-weight: bold;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;</a>
			</div>
	</div>

 </div>
 
 
	
<!-- <center><p style="color:black;font-size:50px;font-family:vivaldi">Donation Details</p></center> -->
<div id="come2">
<div id="form2">
<form method="POST" action="info.php">
<?php
echo "<p style='color:black;font-size:25px'><b>Hello $n,</p></b>";
echo "<p style='color:black;font-size:19px'><b>Please fill out the below details to carry out your Good Work</b></p></strong>";
?>

<label>Select your NGO: </label><br/>
<select name="ngo">
<option>Sarthak Foundation</option><option>Humsafar</option>
<option>Pratham</option>
<option>Dada-Dadi </option>
<option>NHFDC</option>
</select>

<br/><br/>
<label>Mobile Number: </label><br/>
<input type="text" name="number" class="inputFields" required /><br><br/>
<label>Aadhar Number: </label><br/>
<input type="text" name="aadhar" class="inputFields" required /><br><br/>
<label>Donation Amount: </label><br/>
<input type="text" name="amount" class="inputFields" required/><p style='font-size:15px'>Example:10000,50000,100000</p>
<input type="checkbox" name="condition" required/>I have read through the website's Privacy Policy &<br/>
 Donor's Policy and Terms and Conditions to make a donation.<br><br/>
<input type="submit" class="thebuttons" name="submit" value="Donate" /><br>
<?php

echo "<p style='color:red'>$r</p>";

?>
</div>
</div>
<?php include("footer.php");?>	
</body>
</html>
