<?php
// configuration
include('connect.php');
// new data
$id = $_POST['memi'];

$b = $_POST['username'];
$c = $_POST['password'];

// query
$sql = "UPDATE user 
        SET username=?, password=?
        WHERE id=?";
$q = $db->prepare($sql);
$q -> execute(array($b,$c,$id));   
header("location: admin-settings.php");
?>