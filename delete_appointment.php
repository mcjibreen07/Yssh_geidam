<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM appointment WHERE appointment_id= :id");
	$result->bindParam(':id', $id);
    $result->execute();
   
?>