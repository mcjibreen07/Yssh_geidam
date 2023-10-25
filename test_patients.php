<?php date_default_timezone_set('Africa/Lagos');?>
<html>
<head>
<title>
YSSH LABORATORY TEST CENNTER
</title>

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

    <?php include('navigate.php');?>
<div class="container-fluid">
      <div class="row-fluid">
     <?php
	 session_start();
	  if($_SESSION['SESS_LAST_NAME']=="Admin")
	  {
		  include('leftbar.php');
	  }
	  else
	  {
		  include('staff_leftbar.php');
	  }
	 ?>
      
    <span class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Patient Send to Laboratory for Test: <?php echo date("l jS F Y"); ?>
			</div>
			<ul class="breadcrumb">
			<li><a href="dashboard.php">Dashboard</a></li> /
			<li class="active">Category</li>
			</ul>


      <?php 
			
			$staff = $_SESSION['SESS_FIRST_NAME'];
			include('connect.php');
				$result = $db->prepare("SELECT * FROM lab_test ORDER BY hospital_no DESC");
				$result->execute();
				$rowcount = $result->rowcount();
				
			?>
		

<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="lab_dashboard.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<br>
  	<div style="text-align:center;">
			Total Number of patient Send to Laboratory For Test:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font><br><br>
			</div>
      <input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Please Search With YCHMA..." autocomplete="off" /><br>
 			
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

<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
            <th>Full Name</th>
            <th>Yschima No</th>
            <th>Testes Requires </th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
  <?php
				include('connect.php');
        $result2 = $db->prepare("SELECT * FROM lab_test ORDER BY id DESC");
				$result2->execute();
        for($i=1; $row2 = $result2->fetch(); $i++){
                    
                    ?>	
	
                    <tr class="record" style="text-transform:Capitalized;">
                        <td><?php echo $row2['name']; ?></td>
                        <td><?php echo $row2['hospital_no']; ?></td>
                        <td style="width: 160px;">
                        <ul>
                            <li style="color: red;"><?php echo $row2['test_1']; ?></li>
                            <li style="color: blue;"> <?php echo $row2['test_2']; ?></li>
                            <li style="color: green;"><?php echo $row2['test_3']; ?></li> 
                            <li style="color: syrup;"> <?php echo $row2['test_4']; ?></li>
                            <li colspan="2" style="color: navy;"><?php echo $row2['test_5']; ?></li>
                            </ul>
                        </td>
                        
                         <td ><a  title="Click To print " rel="facebox" href="print_lab_result.php?&id=<?php echo $row['id']; ?>&name=<?php echo $row['name']?>&yschima_no=<?php echo $row['yschima_no']; ?>
						        &test=<?php echo $row['test']; ?>&result=<?php echo $row['result']; ?>&date=<?php echo $row['date']; ?>">
					          	<button  style="width:120px; height:40px;" class="btn btn-primary btn-mini"><i class="icon-print"></i> print Result </button></a> </br></br>

                        <a  title="Click To Add_Result" rel="facebox" href="add_test_result.php?
                        &id=<?php echo $row2['hospital_no'];?>
                        &t1=<?php echo $row2['test_1'];?>
                        &t2=<?php echo $row2['test_2'];?>
                        &t3=<?php echo $row2['test_3'];?>
                        &t4=<?php echo $row2['test_4'];?>
                        &t5=<?php echo $row2['test_5'];?>">
                        <button style="width:120px; height:40px;" class="btn btn-warning btn-mini">
                        <i class="icon-edit"></i> Add Test Results </button></a> 
                      </td>
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
   url: "delete_patient.php",
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