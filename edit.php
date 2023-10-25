<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM patients WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveedit.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit </h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="owner" value="<?php echo $row['name']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="vehicle" value="<?php echo $row['address']; ?>" /><br>
<span>sex: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['sex']; ?>" /><br>
<span>age: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['age']; ?>" /><br>
<span>nhis_no: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['nhis_no']; ?>" /><br>
<span>yschima: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['yschima_no']; ?>" /><br>
<span>phone_no: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['phone_no']; ?>" /><br>
<span>hospital_no: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['hospital_no']; ?>" /><br>
<span>demographic: </span><input type="text" style="width:265px; height:30px;" name="num" value="<?php echo $row['demographic']; ?>" /><br>
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>