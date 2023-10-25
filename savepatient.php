
<?php
date_default_timezone_set('Africa/Lagos');
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['age'];
$d = $_POST['sex'];
$e = $_POST['nhis_no'];
$f = $_POST['yschima_no'];
$g = $_POST['phone_no'];
$h = $_POST['hospital_no'];
$i = $_POST['demographic'];
$j = $_POST['doctor'];
$j = $_POST['staff'];
$date =date("y-m-d");
$time =date("h:i:s a");


// query
$sql = "INSERT INTO patients (name,address,age,sex,nhis_no,yschima_no,phone_no,hospital_no,demographic,staff_name) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j));

$sql2 = "INSERT INTO records (hospital_no,staff_name,date,time) VALUES (:h,:j,:k,:l)";
$q2 = $db->prepare($sql2);
$q2->execute(array(':h'=>$h,':j'=>$j,':k'=>$date,':l'=>$time));

header("location: register_patient.php?msg");


?>