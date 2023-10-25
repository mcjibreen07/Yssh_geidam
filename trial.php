<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="style.css" media="screen" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="src/facebox.js" type="text/javascript"></script>
    <script src="JS/application.js" type="text/javascript" charset="utf-8"></script>
    <title>Parking Lot</title>
</head>

<body style="background-color:lightblue;">
    <header class="shadow">
        <div class="header-content d-flex justify-content-center p-2">
            <img src="./Images/parking.svg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">Parking Lot</div>
        </div>
    </header>
    <div class="form-container mt-5">
    
        <form class="w-50 mx-auto" id="entryForm" action="incoming.php" method="post">
            <h5 class="text-center">Add Car to Parking Lot</h5>
            <div class="form-group">
                <label for="owner">Owner:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="owner" placeholder="Owner" name="owner" required>
                
            </div>
            <div class="form-group">
                <label for="car">Car:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="car" placeholder="Car" name="vehicle" required>
            </div>
            <div class="form-group">
                <label for="licensePlate">License Plate:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="licensePlate" placeholder="NN-NN-LL,NN-LL-NN,....etc" name="num" required>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- <label for="entryDate">Entry Date:</label> -->
                    <input type="hidden" class="form-control rounded-0 shadow-sm" id="entryDate" name="date" value="<?php echo date("m/d/y"); ?>">
                </div>
                <div class="col-6">
                    <!-- <label for="exitDate">Exit Date:</label> -->
                    <input type="hidden" class="form-control rounded-0 shadow-sm" id="exitDate" name="exit">
                </div>
            </div>
            
            <!-- <a rel="facebox" href="addcustomer.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Customer</button></a><br><br> -->
            <button type="submit" class="btn mx-auto d-block mt-5 rounded-0 shadow" id="btnOne">Add Car</button>
        </form>
        
    </div>
    <div class="table-container mt-5 mb-5 w-75 mx-auto" >
            <h5 class="text-center mb-3">List of Cars in Parking Lot</h5>
            <input type="text" class="w-100 mb-3" id="searchInput" placeholder="Search...">
            <!-- <input type="text" name="filter"  id="filter" class="w-100 mb-3" placeholder="Search Customer..." autocomplete="off" /> -->
            <!-- <input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Category..." autocomplete="off" /> -->
                <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
                    <thead >
                      <tr>
                            <th>owner</th>
                            <th>vehicle</th>
                            <th>number</th>
                            <th>date</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
				
                        include('connect.php');
                        $result = $db->prepare("SELECT * FROM inpark ");
                        //$result->bindParam(':userid', $id);
                        $result->execute();

                        for($i=1; $row = $result->fetch(); $i++){
                        ?>
                        <tr class="record">
                            <td><?php echo $row['owner']; ?></td>
                            <td><?php echo $row['vehicle']; ?></td>
                            <td><?php echo $row['num']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                        
                        </tr>
                    <?php
                        }
                    ?>

                    </tbody>
                </table>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
    <script src="./JS/core.js"></script>

    <script src="JS/jquery.js"></script>
</body>

</html>