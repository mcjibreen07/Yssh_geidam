<?php
session_start();
include('connect.php');
$a = $_POST['weight'];
$b = $_POST['tempreture'];
$c = $_POST['bp'];
$d = $_POST['family_history'];
$e = $_POST['examination'];
$g = $_POST['complain_date'];
$complain = $_POST['complain'];
$patient_name = $_POST['patient_name'];
$hospital_no = $_POST['hospital_no'];




// query
$sql = "INSERT INTO diagnosis (weight,tempreture,bp,family_history,examination,complain_date,hospital_no,complain) VALUES (:a,:b,:c,:d,:e,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':g'=>$g,':h'=>$hospital_no,':i'=>$complain));
header("location: diagnosis.php?msg='diagnosis added successfully' & patient_name=$patient_name & hospital_no=$hospital_no");


?>