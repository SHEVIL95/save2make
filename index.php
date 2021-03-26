
<!DOCTYPE html>
<html>
<head>
	<title>save2make Donations</title>
	<?php include("header.php");?>
 <div style="width:100%; margin-top:5px;">
    <div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate1.jpg" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate2.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			   <img src="images/donate3.jfif" style="width:100%; height:600px;">
			</div>
			
			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate4.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate5.jpg" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			   <img src="images/donate6.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate7.jpg" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate8.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			   <img src="images/donate9.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate10.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate11.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			   <img src="images/donate12.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate13.jpeg" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="images/donate14.jfif" style="width:100%; height:600px;">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			   <img src="images/donate15.jfif" style="width:100%; height:600px;">
			</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
<span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

 </div>
<!-- <center> <a href="donate.php"><input type="image" src="images/donate16.jfif " height="100px" width="300px" bottom-margin="0px" border-radius="50%"></a></center> -->
			<div id="image" >
			<img src="images/about.jpg"; height=150px; width=190px; border="0"; align=left> 
			<center><img src="images/NGO.jpg"; height=150px; width=190px; border="0">
			<img src="images/donate.jpg"; height=150px; width=190px; border="0"; align=right>
			</div>
			<div style="float:left; margin-left:280px"><span><a href="about.php">About Us</a></span></div>
<div style="float:right; margin-right:280px"><span><a href="login.php">Donate<span></a></div>
<div style="margin:0px auto; width:100px;"><span><a href="ngo.php">Partners</span></a></div>
<div id="donate">
	<h3><b>Donate Money to those who needs you</h3><b><br>
<center>
<img src="images/child.jpg";height=270px; width=165px; border="1">
<img src="images/edu.jpg";height=240px; width=165px; border="1">
<img src="images/women.jpg";height=170px; width=160px; border="1">
<img src="images/dis.jpg";height=310px; width=190px; border="1">
<img src="images/dadadadi.jpg";height=240px; width=190px; border="1"></center>
<pre><strong>    CHILDREN        EDUCATION	  WOMEN           DISABLED          AGED PEOPLE</strong></pre>
</div>
<div id="set">
<center><h1 style="color:#550000"><strong>"SAVE CHANGE TO MAKE CHANGE---Come together to become a reason of someone's happiness"</strong></h1></center>
</div>
	<?php include("footer.php");?>
</body>
</html>



<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>