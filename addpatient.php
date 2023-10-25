<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savepatient.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Patient</h4></center>
<hr>
<div id="ac">
	<input type="hidden" name="staff" value="<?php echo $_GET['staff']; ?>">
<span>FullName : </span><input type="text" style="width:265px; height:30px;" name="name" ><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" Required/><br>
<span>Age : </span><input type="number" style="width:265px; height:30px;" name="age" Required/><br>
<span>Sex: </span>
<select name="sex"  style="width:264px; height:30px; background-color:white;" >
	<option value="male">Male</option>
	<option value="female">Female</option>
		
</select><br>
<span>Nhis No : </span><input type="text" style="width:265px; height:30px;" name="nhis_no" /><br>
<span>Yschima No: </span><input type="text" id="txt1" style="width:265px; height:30px;" name="yschima_no" Required><br>
<span>Phone No : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="phone_no" Required><br>
<span>Hospital No : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="hospital_no" required><br>
<span>Demographic Report : </span><textarea style="width:265px; height:50px;" name="demographic"> </textarea><br>
<span>Assign Doctor: </span>
<select name="doctor" style="width:264px; height:30px; background-color:white;"  required>
<option>Select Doctor</option>
	<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM user WHERE position='Doctor' ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['username']; ?></option>
	<?php
				}
			?>
</select>


<div style="float:center; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
