<?php
session_start();
include('connect.php');
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['position'];
// query
$sql = "INSERT INTO user (username,password,position) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: admin-settings.php");


?>