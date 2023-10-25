<?php
session_start();
include('connect.php');
$name = $_POST['name1'];
$test_1 = $_POST['test_1'];
$test_2 = $_POST['test_2'];
$test_3 = $_POST['test_3'];
$test_4 = $_POST['test_4'];
$test_5 = $_POST['test_5'];
$date = $_POST['date1'];
$hospital_no = $_POST['hospital_no'];



 


$sql = "INSERT INTO lab_test  (name,date,hospital_no, test_1,test_2,test_3,test_4,test_5) VALUES (:name,:date,:hospital_no,:test_1,:test_2,:test_3,:test_4,:test_5)";
$q = $db->prepare($sql);
$q->execute(array(':name'=>$name,':date'=>$date,':hospital_no'=>$hospital_no,':test_1'=>$test_1,':test_2'=>$test_2,':test_3'=>$test_3,':test_4'=>$test_4,':test_5'=>$test_5));
header("location: diagnosis.php?msg='Patiest Request Has been Send to Laboratory successfully' & patient_name=$patient_name & hospital_no=$hospital_no");


?>