<?php
session_start();
if(!isset($_SESSION['SESS_MEMBER_ID']))
{
	header("location:index.php");
}
?>

<?php include 'header.php'; ?>
<?php include('navfixed.php');?>
    <div class="container-fluid">
      <div class="row-fluid">
	
	  
			<?php
		    if($_SESSION['SESS_LAST_NAME']=="Staff")
			{
				include('staff_leftbar.php');
			}
		  ?>
	<div class="span10">
	<div class="contentheader">
		
			<i class="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 40px 'Aleo'; color:white;"><center>SPECIALIST  HOSPITAL  GEIDAM</center></font>
<div id="mainmain">

	<?php
	$position=$_SESSION['SESS_LAST_NAME'];

	if($position=='Staff'){
	?>
	<a href="test_patients.php"><i class="icon-group icon-2x"></i><br>Lab Patients </a>                     
	<a href="record.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> Lab Report</a>      
	<?php 
	}  
	?>
	<div class="clearfix"></div>
	
 
</div>
</div>
</div>
</div>
</body><br><br><br><br><br><br><br><br>
<footer><center>copyright 2022</center></footer>
<?php include('footer.php'); ?>
</html>
