<?php
	include('connect.php');
	$id=$_GET['id'];
	$t1 = $_GET['t1'];
	$t2 = $_GET['t2'];
	$t3 = $_GET['t3'];
	$t4 = $_GET['t4'];
	$t5 = $_GET['t5'];
	
  ?>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="save_lab.php" method="POST">
<center><h4><i class="icon-edit icon-large"></i> List Of Tests Required  </h4></center>
<hr><hr>
<div id="ac">

<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<table>
	<tr> 
<td colspan="2"><span style="font-size:large; font-weight:bold; font-weight: bolder; padding:2px ;color: red;
  padding: 8px; background-color: #2196F3;"><?php echo$t1 ?></span>
<input type="text" style="width:240px; height:47px;" name="r1" id="r1" value=""/></td><tr>
<td colspan="2"><span  style="font-size:large; font-weight:bold; font-weight: bolder; padding:2px ;color: red;
  padding: 8px; background-color: #2196F3;"><?php echo$t2 ?> </span>
<input type="text" style="width:240px; height:47px;" name="r2" id="r2" value=""></td><tr> </td><tr>
<td colspan="2"><span style="font-size:large; font-weight:bold; font-weight: bolder; padding:2px ;color: red;
  padding: 8px; background-color: #2196F3;"><?php echo$t3 ?> </span>
<input type="text" style="width:240px; height:47px;" name="r3" id="r3" value=""/></td><tr> 
<td colspan="2"><span style="font-size:large; font-weight:bold; font-weight: bolder; padding:2px ;color: red;
  padding: 8px; background-color: #2196F3;"><?php echo$t4 ?> </span>
<input type="text" style="width:240px; height:47px;" name="r4" id="r4" value=""/></td><tr> 
<td colspan="2"><span  style="font-size:large; font-weight:bold; font-weight: bolder; padding:2px ;color: red;
  padding: 8px; background-color: #2196F3;"><?php echo$t5 ?> </span>
<input type="text" style="width: 240px; height:47px;" name="r5" id="r5" value=""/></td><tr>


<td colspan="2">
 <input type="text" style="width:370px; height:80px;" name="rmk"  placeholder="Do You Have Any Comment to Add? (Optional)"></td><tr> </td> </tr>
</table>

<h6>Please You Are Expected to Add Test Result That are Shown Above Only  </h6>
<div style="display: flex;
  justify-content: center;
  align-items: center;;"> 
                        <button style="width:120px; height:40px;" class="btn btn-warning btn-mini">
                        <i class="icon-edit"></i> Add Test Results </button>


</div>
</div>
</form>
<?php
	//$result = $db->prepare("SELECT * FROM lab_result WHERE hospital_no= :userid");
	//$result->bindParam(':userid', $id);
   //$result->execute();
   //for($i=0; $row = $result->fetch(); $i++){

?>