<?php
// configuration
include('connect.php');

// new data
$id = $_POST['memi'];
$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$r4 = $_POST['r4'];
$r5 = $_POST['r5'];




// query
$sql = "INSERT INTO lab_result (hospital_no,result_1,result_2,result_3,result_4,result_5) VALUES (:id,:r1,:r2,:r3,:r4,:r5)";
$q = $db->prepare($sql);
$q->execute(array(':id'=>$id,':r1'=>$r1,':r2'=>$r2,':r3'=>$r3,':r4'=>$r4,':r5'=>$r5));
header("location: test_patients.php?edit_msg");

?>