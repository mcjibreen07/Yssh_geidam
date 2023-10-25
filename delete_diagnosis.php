<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM diagnosis WHERE diagnos_id= :id");
	$result->bindParam(':id', $id);
    $result->execute();
   
?>

