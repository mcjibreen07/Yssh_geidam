<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM amount WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditamount.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit User</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Username : </span><input type="text" style="width:265px; height:30px;" name="amount" value="<?php echo $row['amount']; ?>" /><br>
<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>