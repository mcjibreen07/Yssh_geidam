<?php date_default_timezone_set('Africa/Lagos'); ?>
<!DOCTYPE html>
<html>
<head>

<?php
session_start();
	
		 
                       

?>
<title>
ucm
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
   //window.location.href="delete.php"; redirect
}
</script>

<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>



 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
</head>
<body>

<?php include('navfixed.php');?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	
		
	<div class="span10">

<div class="content" id="content">
<div style="margin: 0 auto; padding: 20px; width: 900px; font-weight: normal;">
	<div style="width: 100%; height: 190px;" >
	<div style="width: 900px; float: left;">
	<center><div style="font:bold 25px 'Aleo';">SPECIALIST HOSPITAL GEIDAM </div>
	HAUSARI WARD, YOBE STATE<br>
	
	Laboratory Report  generated on <?php echo date('d/m/y') ?><br>	<br>
	</center>
	<div>
	
	</div>
	</div>
	<div style="width: 136px; float: left; height: 70px;">
	<table cellpadding="3" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">

		<tr>
			<td>Date :</td>
			<td><?php echo date('d/m/y') ?></td>
		</tr>
	</table>
	
	</div>
	<div class="clearfix"></div>
	</div>
	<div style="width: 100%; margin-top:-70px;">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead>
			<tr>
				<th>id</th>
				<th>Full Name</th>
				<th>Date</th>
				<th>Test</th>
				<th>Result</th>
	
			</tr>
		</thead>
		<tbody>
				<?php	include('connect.php');
				//find amount
				// $result = $db->prepare("SELECT * FROM amount ");
				// $result->execute();
				// $row = $result->fetch(); 
				
				//find user details
				$diagnos_id=$_GET['id'];
				$result = $db->prepare("SELECT * FROM lab WHERE id='$diagnos_id' ");
				$result->execute();
				$row = $result->fetch();?>

				<tr class="record">
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo  $row['test'];  ?></td>
					<td><?php echo  $row['result'];  ?></td>
							
				</tr>
				
		</tbody>
	</table>
	
	</div>
	</div>
	</div>
	</div>
		<div class="pull-right" style="margin-right:100px;">
			<a href="javascript:Clickheretoprint()" style="font-size:20px;" id="<?php echo $_GET['id']; ?>" class="delbutton"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
</div>
</div>

<script src="js/jquery.js"></script>

<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</body>
<?php include('footer.php');?>

</html>