<?php
date_default_timezone_set('Africa/Lagos');
//session_start();
include('connect.php');
$a = $_POST['owner'];
$b = $_POST['vehicle'];
$c = $_POST['num'];
$d = date('h:i:s a');
//$_POST['time'];

$date = $_POST['date'];



 
$result = $db->prepare("SELECT id FROM inpark WHERE num = '$c' ");
$result->execute();
$rowcount = $result->rowcount();


if($rowcount>0)
{
    echo" card used <br> 
    <a href='park.php'><font color='green' style='font:bold 22px 'Aleo'; font-weight:25'>back</a></font>
    ";
}
else
{
$sql = "INSERT INTO inpark (owner,vehicle,num,time,date) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$date));
header("location: park.php");
}

?>