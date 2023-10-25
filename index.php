<?php
//include 'connect.php';
$db = mysqli_connect("localhost","root","","ptnt");
	session_start();
if(isset($_POST['submit']))
{
	$login = mysqli_escape_string($db,$_POST['username']);
	$password = mysqli_escape_string($db,$_POST['password']);
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysqli_query($db,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result)==1) {
			//Login Successful
			//session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];

		    if($_SESSION['SESS_LAST_NAME']=="Staff")
			{
				header("location: lab_dashboard.php");
			} elseif 
		    ($_SESSION['SESS_LAST_NAME']=="Doctor")
			{
				header("location: dashboard.php");
			}
			elseif 
		    ($_SESSION['SESS_LAST_NAME']=="PMS")
			{
				header("location: pms_dashboard.php");
			}			 
			elseif 
		    ($_SESSION['SESS_LAST_NAME']=="Admin");
			{
				header("location: dashboard.php");
			}

			
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
}

?>
<html>
<head>

<title>
YSSHG
</title>
    <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
       		 padding-top: 60px;
       		 padding-bottom: 40px;
		 background-image:url('images/index.jpg'); 
		 background-position:center; 
		 background-repeat:no-repeat; 
		 background-size:cover; 
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head> <!-- style="background: #83cee7;" -->
<body style=" 
	 	 padding-top: 80px;
       		 padding-bottom:450px;
		 background-image:url('images/index.jpg'); 
		 background-position:center; 
		 background-repeat:no-repeat; 
		 background-size:cover; 
 ">
    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	
</div>
        
<div id="login" class="login">
   
<form action="index.php" method="post">

			<font style=" font:bold 34px 'Aleo'; color:aliceblue;"><center>YSSH LOGIN PANEL  </center></font>
		<br>

		
<div class="input-prepend">
		<span style="height:30px; width:25px;" class="add-on"><i class="icon-user icon-2x"></i></span><input style="height:40px;" type="text" name="username" Placeholder="Username" required/><br>
</div>
<div class="input-prepend">
	<span style="height:30px; width:25px;" class="add-on"><i class="icon-lock icon-2x"></i></span><input type="password" style="height:40px;" name="password" Placeholder="Password" required/><br>
		</div>
		
		<div class="qwe">
		 <button class="btn btn-large btn-primary btn-block pull-right" name="submit" ><i class="icon-signin icon-large"></i> LOGIN</button>
</div>
		 </form>
</div>
</div>
</div>

</div>
</body>
</html>