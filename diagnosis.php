<?php date_default_timezone_set('Africa/Lagos');?>
<html>
<head>
<title>
uch
</title>

<?php 
//require_once('auth.php');

if(Isset($_REQUEST['msg']))
{
	echo"<script>alert('diagnosis added successfully')</script>";
}
if(Isset($_REQUEST['edit_msg']))
{
	echo"<script>alert('updated successfully')</script>";
}	
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
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

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>

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
</script>	

</head>
<body>
<!-- <header class="shadow">
        <div class="header-content d-flex justify-content-center p-2">
            <img src="./Images/parking.svg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">Parking Lot</div>
        </div>
    </header> -->
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
     <?php
	 session_start();
	  if($_SESSION['SESS_LAST_NAME']=="Admin")
	  {
		  include('leftbar.php');
	  }
	 else if($_SESSION['SESS_LAST_NAME']=="Staff")
		{
			include('staff_leftbar.php');
		}
		else if($_SESSION['SESS_LAST_NAME']=="Doctor")
		{
			include('doctor_leftbar.php');
		}
	 ?>
      
    <span class="span10">
	<div class="contentheader">
			
			<center style="background-color:blue; color:white"><i class="icon-file"></i> <?php echo $_GET['patient_name']; ?> Diagnosis History</center><br><br>
			</div>
			<ul class="breadcrumb">
			<li><a href="dashboard.php">Dashboard</a></li> /
			<li class="active">Diagnosis</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="mypatients.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php 
			
			$username=$_SESSION['SESS_FIRST_NAME'];
			include('connect.php');
				$result = $db->prepare("SELECT * FROM appointment WHERE doctor_name='$username' ORDER BY appointment_id DESC");
				$result->execute();
				$rowcount = $result->rowcount();
				
			?>
			
		<br><br><br>
				
</div>

<form class="w-50 mx-auto" id="entryForm" action="" method="post">
			
			           
            <div class="form-group">
                <!-- <label for="car">Car:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="car" placeholder="Car" name="vehicle" required> -->
            </div>
            <div class="form-group">
                <!-- <label for="licensePlate">License Plate:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="licensePlate" placeholder="NN-NN-LL,NN-LL-NN,....etc" name="num" required>
            </div> -->
            <div class="row">
                <div class="col-6">
                    <!-- <label for="entryDate">Entry Date:</label> -->
                    <input type="hidden" class="form-control rounded-0 shadow-sm" id="entryDate" name="date" value="<?php echo date("d/m/Y"); ?>">
                    <input type="hidden" class="form-control rounded-0 shadow-sm" id="entrytime" name="time" value="<?php echo date('h:i:s a'); ?>">
                </div>
                <div class="col-6">
                    <!-- <label for="exitDate">Exit Date:</label> -->
                    <input type="hidden" class="form-control rounded-0 shadow-sm" id="exitDate" name="exit" value="<?php echo date('h:i:s a'); ?>">
                </div>
            </div>
            
            <!-- <a rel="facebox" href="addcustomer.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Customer</button></a><br><br> -->
            <!-- <button type="submit" class="btn mx-auto d-block mt-5 rounded-0 shadow" id="btnOne">Add Car</button> -->
         <!--   <br /><Button type="submit" class="btn btn-info" style="margin-left:40%; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add to Park</button><br><br>-->
</form>

<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search here..." autocomplete="off" />
<a rel="facebox" href="adddiagnosis.php?patient_name=<?php echo $_GET['patient_name']; ?>&hospital_no=<?php echo $_GET['hospital_no']; ?>"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Diagnosis</button></a><br><br> 
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
            <th>Weight</th>
            <th>Tempreture</th>
            <th>Bp</th>
            <th>Family history</th>
 	          <th>Complain</th>
            <th>Examination</th>
            <th>Diagnosis</th>
            <th>Complain Date</th>  
            <th>Print Diagnosis</th>
            <th>Send to Lab</th>
            <th>Lab Result</th>
            <th>Pharm</th>
            <th>Delete</th>
		</tr>
	</thead>
	<tbody>
		
  <?php
				$hospital_no=$_GET['hospital_no'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM diagnosis WHERE hospital_no='$hospital_no' ORDER BY diagnos_id DESC");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
      ?>
      
      
      <tr class="record" style="text-transform:lowercase;">
                        <td><?php echo $row['weight']; ?></td>
                        <td><?php echo $row['tempreture']; ?></td>
                        <td><?php echo $row['bp']; ?></td>
                        <td><?php echo $row['family_history']; ?></td>
			                  <td><?php echo $row['complain']; ?></td>
                        <td><?php echo $row['examination']; ?></td>
                        <td><?php echo $row['examination']; ?></td>
                        <td><?php echo $row['complain_date']; ?></td>
                        <td>
						<a  title="Click To print " rel="facebox" href="print_diagnos_detail.php?id=<?php echo $row['diagnos_id']; ?> & hospital_no=<?php echo $hospital_no; ?>">
						<button class="btn btn-primary btn-mini"><i class="icon-print"></i> print Diagnosis </button></a> </br>
        </td><td>
            <a  title="Send To Lab " rel="facebox"
						<button class="btn btn-primary btn-mini" href="patients_lab_details.php?patient_name=<?php echo $_GET['patient_name']; ?>&hospital_no=<?php echo $_GET['hospital_no']; ?>"><i class="icon-print"></i> Laboratory </button></a></br>
                        </td>
                        <td>
            <a  title="View Laboratory REsult " rel="facebox"
						<button class="btn btn-primary btn-mini" style="background-color:brown;"href="patients_lab_results.php?hospital_no=<?php echo $hospital_no ?>"><i class="icon-print"></i> View Lab Result </button></a></br>
                        </td>
                       <td>
            <a  title="Send To Pharm " rel="facebox"
						<button class="btn btn-primary btn-mini"><i class="icon-print"></i> Send to Pharma </button></a> 
                        </td>
                        <td>
                        <a href="#" id="<?php echo $row['diagnos_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a>  </td>
                    </tr>
                <?php
                    }
                ?>
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Category? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete_diagnosis.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</body>
<?php include('footer.php');?>

</html>