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
<form action="send_to_lab.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i>  Laboratory Module </h4></center>
<hr>

<div id="ac" style="border: solid; border-color:black; padding:20px" >

  <h4> Please Fill-out Tests Required  </h4>

  
  <div class="field_wrapper" >
  <input type="hidden" name="hospital_no" value="<?php echo $_GET['hospital_no']; ?>" >
  <input type="hidden" name="name1" value="<?php echo $_GET['patient_name']; ?>" >
  <input type="hidden" name="date1" value="<?php echo date('d/m/y') ?>" >

 
  Test-1 : <select style="padding: 5px; font-size:medium; color:teal; font-weight:bold;" name="test_1" id="test_1">
  <option value="Nil"> None </option>
  <option value="MO"> MP </option>
  <option value="WIDAL"> WidalL </option>
  <option value="FBC"> FBC </option>
  <option value="LFT"> LFT </option>
  <option value="RBS"> RBS </option>
  <option value="FBS"> FBS </option>
  <option value="FLP"> FLP </option>
  <option value="RVS"> RVS </option>
  <option value="HCV"> HCV </option>
  <option value="T3T4"> T3T4 </option>
  <option value="LP"> LP </option>
  <option value="GNT"> GenoType </option> 
  <option value="Dimer"> d-Dimer </option> 
  <option value="Blood Culture"> Blood Culture </option> 
  <option value="Stool Microscopy"> Stool Microscopy </option> 
  <option value="Stool Microscopy"> Stool M/C/S </option> 
  <option value="Urine Microscopy"> Urine M/C/S </option> 
  <option value="Urinalysis"> Urinalysis </option> 
  <option value="Eucr"> E/U/cr </option> 
  <option value="Hbsag"> HBsAg </option> 
  <option value="Blood Grooping"> Blood Grouping/Cross Matching </option>
  </select></br>

  Test-2 : <select style="padding: 5px; font-size:medium; color:teal; font-weight:bold;" name="test_2" id="test_2">
  <option value="Nil"> None </option>
  <option value="MO"> MP </option>
  <option value="WIDAL"> WidalL </option>
  <option value="FBC"> FBC </option>
  <option value="LFT"> LFT </option>
  <option value="RBS"> RBS </option>
  <option value="FBS"> FBS </option>
  <option value="FLP"> FLP </option>
  <option value="RVS"> RVS </option>
  <option value="HCV"> HCV </option>
  <option value="T3T4"> T3T4 </option>
  <option value="LP"> LP </option>
  <option value="GNT"> GenoType </option> 
  <option value="Dimer"> d-Dimer </option> 
  <option value="Blood Culture"> Blood Culture </option> 
  <option value="Stool Microscopy"> Stool Microscopy </option> 
  <option value="Stool Microscopy"> Stool M/C/S </option> 
  <option value="Urine Microscopy"> Urine M/C/S </option> 
  <option value="Urinalysis"> Urinalysis </option> 
  <option value="Eucr"> E/U/cr </option> 
  <option value="Hbsag"> HBsAg </option> 
  <option value="Blood Grooping"> Blood Grouping/Cross Matching </option>
  </select></br>

  Test-3 : <select style="padding: 5px; font-size:medium; color:teal; font-weight:bold;" name="test_3" id="test_3">
  <option value="Nil"> None </option>
  <option value="MO"> MP </option>
  <option value="WIDAL"> WidalL </option>
  <option value="FBC"> FBC </option>
  <option value="LFT"> LFT </option>
  <option value="RBS"> RBS </option>
  <option value="FBS"> FBS </option>
  <option value="FLP"> FLP </option>
  <option value="RVS"> RVS </option>
  <option value="HCV"> HCV </option>
  <option value="T3T4"> T3T4 </option>
  <option value="LP"> LP </option>
  <option value="GNT"> GenoType </option> 
  <option value="Dimer"> d-Dimer </option> 
  <option value="Blood Culture"> Blood Culture </option> 
  <option value="Stool Microscopy"> Stool Microscopy </option> 
  <option value="Stool Microscopy"> Stool M/C/S </option> 
  <option value="Urine Microscopy"> Urine M/C/S </option> 
  <option value="Urinalysis"> Urinalysis </option> 
  <option value="Eucr"> E/U/cr </option> 
  <option value="Hbsag"> HBsAg </option> 
  <option value="Blood Grooping"> Blood Grouping/Cross Matching </option>
  </select></br>

  Test-4 : <select style="padding: 5px; font-size:medium; color:teal; font-weight:bold;" name="test_4" id="test_4">
  <option value="Nil"> None </option>
  <option value="MO"> MP </option>
  <option value="WIDAL"> WidalL </option>
  <option value="FBC"> FBC </option>
  <option value="LFT"> LFT </option>
  <option value="RBS"> RBS </option>
  <option value="FBS"> FBS </option>
  <option value="FLP"> FLP </option>
  <option value="RVS"> RVS </option>
  <option value="HCV"> HCV </option>
  <option value="T3T4"> T3T4 </option>
  <option value="LP"> LP </option>
  <option value="GNT"> GenoType </option> 
  <option value="Dimer"> d-Dimer </option> 
  <option value="Blood Culture"> Blood Culture </option> 
  <option value="Stool Microscopy"> Stool Microscopy </option> 
  <option value="Stool Microscopy"> Stool M/C/S </option> 
  <option value="Urine Microscopy"> Urine M/C/S </option> 
  <option value="Urinalysis"> Urinalysis </option> 
  <option value="Eucr"> E/U/cr </option> 
  <option value="Hbsag"> HBsAg </option> 
  <option value="Blood Grooping"> Blood Grouping/Cross Matching </option>
  </select></br>

  Test-5 : <select style="padding: 5px; font-size:medium; color:teal; font-weight:bold;" name="test_5" id="test_5">
  <option value="Nil"> None </option>
  <option value="MO"> MP </option>
  <option value="WIDAL"> WidalL </option>
  <option value="FBC"> FBC </option>
  <option value="LFT"> LFT </option>
  <option value="RBS"> RBS </option>
  <option value="FBS"> FBS </option>
  <option value="FLP"> FLP </option>
  <option value="RVS"> RVS </option>
  <option value="HCV"> HCV </option>
  <option value="T3T4"> T3T4 </option>
  <option value="LP"> LP </option>
  <option value="GNT"> GenoType </option> 
  <option value="Dimer"> d-Dimer </option> 
  <option value="Blood Culture"> Blood Culture </option> 
  <option value="Stool Microscopy"> Stool Microscopy </option> 
  <option value="Stool Microscopy"> Stool M/C/S </option> 
  <option value="Urine Microscopy"> Urine M/C/S </option> 
  <option value="Urinalysis"> Urinalysis </option> 
  <option value="Eucr"> E/U/cr </option> 
  <option value="Hbsag"> HBsAg </option> 
  <option value="Blood Grooping"> Blood Grouping/Cross Matching </option>
  </select></br>

</div>
<div style="align:centre; margin-right:10px;">
        <input type="text"   style="width:267px; height:50px;  align:centre;"  placeholder="Remark (Optional)" name="remark" id="remark"/>    
     
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Send to Laboratory Now </button>
</div>
</div>
</form>
<?php
 include('footer.php');
?>