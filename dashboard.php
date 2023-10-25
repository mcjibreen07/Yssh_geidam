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
			if($_SESSION['SESS_LAST_NAME']=="Admin")
			{
				include('leftbar.php');
			}
			else if($_SESSION['SESS_LAST_NAME']=="Staff")
			{
				include('staff_leftbar.php');
			}
			else if($_SESSION['SESS_LAST_NAME']=="PMS")
			{
				include('staff_leftbar.php');
			}
			else if($_SESSION['SESS_LAST_NAME']=="Doctor")
			{
				include('doctor_leftbar.php');
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
	if($position=='Admin') {
	?>
	<a href="appointments.php"><i class="icon-group icon-2x"></i><br> Appointment</a>                
	<a href="register_patient.php"><i class="icon-list-alt icon-2x"></i><br> Register Patient</a>                
	<a href="record.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> View Record</a>     
	<a href="admin-settings.php"><i class="icon-flag icon-2x"></i><br> User Manager</a>  
	<!-- <a href="Amount.php"><i class="icon-money icon-2x"></i><br> Amount</a>   -->
	<?php
	}
	if($position=='Staff') {
	?>

	<a href="appointments.php"><i class="icon-group icon-2x"></i><br> Appointment</a>                
	<a href="register_patient.php"><i class="icon-list-alt icon-2x"></i><br> Register Patient</a>       
	<a href="record.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> View Record</a>      
	<?php 
	} 
	if($position=='PMS') {
		?>
	
		<a href="appointments.php"><i class="icon-group icon-2x"></i><br> Appointment</a>                
		<a href="register_patient.php"><i class="icon-list-alt icon-2x"></i><br> Register Patient</a>       
		<a href="record.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> View Record</a>      
		<?php 
		} 
	
	if($position=='Doctor') {
	?>
	
	
	<a href="mypatients.php"><i class="icon-list-alt icon-2x"></i><br>My Patients</a>                
	<a href="record.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> View Record</a>      
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
