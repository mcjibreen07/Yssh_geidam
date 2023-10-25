<?php
// configuration
include('connect.php');
// new data
$id = $_POST['memi'];

$b = $_POST['amount'];


// query
$sql = "UPDATE amount 
        SET amount=?
        WHERE id=?";
$q = $db->prepare($sql);
$q -> execute(array($b,$id));   
header("location: amount.php");
?>