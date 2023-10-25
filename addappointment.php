<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveappointment.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Appointment</h4></center>
<hr>
<div id="ac">

<span>Patient Name : </span>
<select name="patient_name" style="width:265px; height:30px; margin-left:-5px;" class="chzn-select" required>

	<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM patients");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?> </option>
	<?php
				}
			?>
</select><br><br>

<span>Doctor Name : </span>
<select name="doctor_name" style="width:265px; height:30px; margin-left:-5px;" class="chzn-select" required>

	<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM user WHERE position='Doctor' ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['username']; ?> </option>
	<?php
				}
			?>
</select><br><br>

<span>Choose Date : </span><input type="date" style="width:265px; height:30px;" name="appointment_date" placeholder="username"/ required><br><br>
<span>Choose Time : </span><input type="time" style="width:265px; height:30px;" name="appointment_time" placeholder="username"/ required><br><br>
<!--<span>Appointment Type : </span>
<select name="appointment_type" style="width:265px; height:30px; margin-left:-5px;" class="chzn-select" required>
<option> </option>
</select><br><br>-->

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Appointment</button>
</div>
</div>
</form>
<?php include('footer.php');?>
