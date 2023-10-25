<?php
session_start();
include('connect.php');
$a = $_POST['patient_name'];
$b = $_POST['doctor_name'];
$c = $_POST['appointment_date'];
$d = $_POST['appointment_time'];

$result = $db->prepare("SELECT * FROM patients WHERE id= :userid");
$result->bindParam(':userid', $a);
$result->execute();
$row = $result->fetch();
$patient_name=$row['name'];
$sex=$row['sex'];
$age=$row['age'];
$yschima_no=$row['yschima_no'];
$hospital_no=$row['hospital_no'];
// for($i=0; $row = $result->fetch(); $i++){
// $asasa=$row['price'];
// $code=$row['product_code'];
// $gen=$row['gen_name'];
// $name=$row['product_name'];
// $p=$row['profit'];
// }

$result1 = $db->prepare("SELECT * FROM user WHERE id= :userid");
$result1->bindParam(':userid', $b);
$result1->execute();
$row1 = $result1->fetch();
$doctor_name=$row1['username'];



// query
$sql = "INSERT INTO appointment (patient_name,doctor_name,date,time,hospital_no,yschima_no,age,sex) VALUES (:a,:b,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$patient_name,':b'=>$doctor_name,':c'=>$c,':d'=>$d,':e'=>$hospital_no,':f'=>$yschima_no,':g'=>$age,':h'=>$sex));
header("location: appointments.php");


?>