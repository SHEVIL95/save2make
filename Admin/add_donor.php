<?php
include "../work.php";
include "../connect.php";
include("../mail.php");
$res=register($con,$mail);
?>

<?php include("admin_header.php");?>
	


    <div style="width:50%; margin:5px auto;  border:solid 1px #666; background: white; ">
        <div style="line-height:50px; text-indent:18px;color:white; font-size:14px;font-family:arial;background: #7d7d7d;font-weight:bold; ">FILL UP THE USER DETAILS<a href="dashboard2.php" style="float:right; margin-right: 15px;font-weight:bold; color:white; text-decoration: none;">BACK</a>
        </div>
        
       <div class="form"  style="width:100%; ">
                <form action="admin_dashboard.php" method="post" enctype="multipart/form-data">
            <table width="100%"  style="border-collapse:collapse;">
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
<center>
<input type="submit"  name="submit" class="thebuttons"/><br><br/>
</center>
<?php
echo $res;
?>
            </form>
        </div>
    
    </div>
    <?php include("admin_footer.php");?>
    </body>
    </html>
    
    
    