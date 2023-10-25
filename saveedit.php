<?php
// configuration
include('connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['sex'];
$d = $_POST['age'];
$e = $_POST['nhis_no'];
$f = $_POST['yschima_no'];
$g = $_POST['phone_no'];
$h = $_POST['hospital_no'];
$i = $_POST['demographic'];

// query
$sql = "UPDATE patients 
        SET name=?, address=?, sex=?,  age=?,  nhis_no=?,  yschima_no=?,  phone_no=?,  hospital_no=?,  demographic=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$id));
header("location:register_patient.php?edit_msg");

?>