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

				Welcome,&nbsp;<span style="color:#ffffff; font-size:120%; "><?php echo $n;?></span><a href="logout.php"  style="color:white; text-decoration: none;font-weight: bold;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;</a>
			</div>
	</div>

 </div>            
<div id="image2"> 
	SAVE-2-MAKE DONATIONS<br><br>
Thank you for DONATING on Save2Make Platform.<br> Congratulations, You Made A CHANGE!!<br>
To,	The Wonderful Person - Mr/Miss <u><?php echo "$n"; ?></u>,<br>
It is such an honor for us to tell that you've become<br>
a HERO for the thousands "LIGHT OF HOPES", by<br>
making them able to continue reaching their DREAMS.<br>
<br>
<font color="grey">"Save a change from your EARNING, To keep someone's light BURNING"</font>
</div>
<?php include("footer.php");?>			
</body>
</html> 




<!-- #image2{
	background-color: rgba(88, 0, 0, 0.986);
	margin-left:250px;
	height:500px;
	width:900px;
	padding-top: 20px;
	border-style: double;
	border-color: goldenrod;
	border-width: 7px;
	border-radius: 4%;
	text-align: center;
	margin-right:100px;
	margin-top:10px;
	font-size:xx-large;
	font-weight: bolder;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-style: oblique;
	color: goldenrod;
	-webkit-font-feature-settings:;
	-moz-font-feature-settings:;
	-webkit-border-radius: 4%;
	-moz-border-radius: 4%;
	-ms-border-radius: 4%;
	-o-border-radius: 4%;
} -->


<!-- -webkit-font-feature-settings:;
	-moz-font-feature-settings:;
	-webkit-border-radius: 4%;
	-moz-border-radius: 4%;
	-ms-border-radius: 4%;
	-o-border-radius: 4%; -->