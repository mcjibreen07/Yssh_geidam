<?php
	include('connect.php');
	$id=$_GET['hospital_no']; 
	$result = $db->prepare("SELECT * FROM lab_result WHERE hospital_no= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	
	for($i=0; $row = $result->fetch(); $i++){



?>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="save_lab.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>Laboratory Test REsults  </h4></center>
<hr><hr>
<div id="ac">

<input type="hidden" name="memi" value="<?php echo $row['hospital_no']; ?>" />

<table border="1">
	<thead>

	</thead>
	<tbody>
		<tr>
		<td>
			<span  style="font-size:medium; font-weight:bold; font-weight: bolder; padding:2px; padding: 8px;">test1 </span>
			<span  style="font-size:medium; font-weight:normal; font-weight: bolder; padding:2px ;padding: 8px;"><?php echo $row['result_1'] ?> </span>
			</td>

			<td>
			<span  style="font-size:medium; font-weight:bold; font-weight: bolder; padding:2px; padding: 8px;">test2 </span>
			<span  style="font-size:medium; font-weight:normal; font-weight: bolder; padding:2px ;padding: 8px;"><?php echo $row['result_2'] ?> </span>
			</td>

			<td>
			<span  style="font-size:medium; font-weight:bold; font-weight: bolder; padding:2px; padding: 8px;">test3 </span>
			<span  style="font-size:medium; font-weight:normal; font-weight: bolder; padding:2px ;padding: 8px;"><?php echo $row['result_3'] ?> </span>
			</td>

			<td>
			<span  style="font-size:medium; font-weight:bold; font-weight: bolder; padding:2px; padding: 8px;">test4 </span>
			<span  style="font-size:medium; font-weight:normal; font-weight: bolder; padding:2px ;padding: 8px;"><?php echo $row['result_4'] ?> </span>
			</td>

			<td>
			<span  style="font-size:medium; font-weight:bold; font-weight: bolder; padding:2px; padding: 8px;">test5 </span>
			<span  style="font-size:medium; font-weight:normal; font-weight: bolder; padding:2px ;padding: 8px;"><?php echo $row['result_5'] ?> </span>
			</td>


		</tr>
	</tbody>
</table>


<h5  align="justify">The Above Is the Result Generated from Specialist Hospital Geidam Laboratory </h5>
<div style="display: flex;
  justify-content: center;
  align-items: center;;"></div>
</div>
</form>
<?php
}
?>