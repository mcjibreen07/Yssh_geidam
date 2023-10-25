<?php
    session_start();
	include('connect.php');
    $id=$_SESSION['id'];
    $owner=$_SESSION['owner'];
    $vehicle=$_SESSION['vehicle'];
    $cardnum=$_SESSION['cardnum'];
    $timeout=$_SESSION['timeout'];

    $timein=date('h:i:s');
    
    $date=date('Y-m-d');


    // add to record table
    $sql = "INSERT INTO outpark (owner_id,owner,vehicle,cardnum,timein,timeout,date) VALUES (:a,:b,:c,:d,:e,:f,:g)";
    $q = $db->prepare($sql);
    $q->execute(array(':a'=>$id,':b'=>$owner,':c'=>$vehicle,':d'=>$cardnum,':e'=>$timein,':f'=>$timeout,':g'=>$date));


// delete from parking lot
	$result = $db->prepare("DELETE FROM inpark WHERE id= :id");
	$result->bindParam(':id', $id);
    $result->execute();
    session_destroy();
    header("location:park.php");
   
?>