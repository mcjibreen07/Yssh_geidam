<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savediagnosis.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Diagnosis</h4></center>
<hr>
<div id="ac">

<input type="hidden" name="patient_name" value="<?php echo $_GET['patient_name']; ?>" >
<input type="hidden" name="hospital_no" value="<?php echo $_GET['hospital_no']; ?>" >
<span>Weight: </span><input type="text" style="width:265px; height:30px;" name="weight" placeholder="weight"/><br><br>
<span>Tempreture: </span><input type="text" style="width:265px; height:30px;" name="tempreture" placeholder="tempreture"/><br><br>
<span>B/P: </span><input type="text" style="width:265px; height:30px;" name="bp" placeholder="bp"/><br><br>
<span>PMhs: </span><input type="text" style="width:265px; height:30px;" name="bp" placeholder="Past Medical History"/><br><br>
<span>Family History </span><input type="text" style="width:265px; height:30px;" name="family_history" placeholder="family history"/><br><br>
<span>Complain </span><input type="text" style="width:265px; height:30px;" name="complain" placeholder="Complain"/><br><br>
<span>Examination </span><input type="text" style="width:265px; height:30px;" name="examination" placeholder="examination"/><br><br>
<span>Diagnosis </span><input type="text" style="width:265px; height:30px;" name="diagnosis" placeholder="Diagnosis"/><br><br>

<span>Complain Date </span><input type="date" style="width:265px; height:30px;" name="complain_date" placeholder="complain date"/><br><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Appointment</button>
</div>
</div>
</form>
<?php include('footer.php');?>
