<?php
include 'Connection.php';
$id = $_GET['updateid'];
$sql = "SELECT *FROM bus_stamby WHERE id='$id'";
$add = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($add);

$bus_no = $row['bus_no'];
$route = $row['route_destination'];
$unit = $row['unit'];
$cor = $row['cor_number'];
$dName = $row['drivers_name'];
$cName = $row['conductors_name'];
$time = $row['departure_time'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form class="row g-3" style="margin:15px;" method="post">
        <!-- Bus Number Container -->
            <div class="col-12">
            <label for="inputAddress" class="form-label">Bus Number</label>
            <input type="text" class="form-control" name="bus_no" placeholder="Enter Bus Number"
            value=<?php echo $bus_no;?>>
            </div>
        <!-- Route Destination Container -->
            <div class="col-12">
            <label for="inputAddress2" class="form-label">Route Destination</label>
            <input type="text" class="form-control" name="route" placeholder="Route Destination"  value=<?php echo $route;?>>
            </div>
        <!-- Unit Container -->
            <div class="col-md-4">
            <label for="inputState" class="form-label">Unit</label>
            <select name="unit" class="form-select">
                <option selected><?php echo $unit;?></option>
                <option>Air Condation</option>
                <option>Not Air Condation</option>
            </select>
            </div>
        <!-- Cor Number Container -->
            <div class="col-12">
            <label for="inputAddress2" class="form-label">COR Number</label>
            <input type="text" class="form-control" name="cor" placeholder="Enter Bus Number"  value=<?php echo $cor;?>>
            </div>
        <!-- Driver's Name Container -->
            <div class="col-12">
            <label for="inputAddress" class="form-label">Driver's Name</label>
            <input type="text" class="form-control" name="dName" placeholder="Enter Driver's Name"  value=<?php echo $dName?>>
            </div>
        <!-- Conductor's Name Container -->
            <div class="col-12">
            <label for="inputAddress2" class="form-label">Conductor's Name</label>
            <input type="text" class="form-control" name="cName" placeholder="Enter Conductor's Name"  value=<?php echo $cName;?>>
            </div>
        <!-- Time Container -->
            <div class="col-12">
            <label for="inputAddress" class="form-label">Time Departured</label>
            <input type="time" class="form-control" name="time" placeholder="Time Departured"  value=<?php echo $time;?>>
            </div>
        <!-- Submit Button Container -->
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary"></button>
        </div>
    </form> 
</body>
</html>
<?php
    include 'Connection.php';
    
    if(isset($_POST['submit']))
    {
        $bus_no = $_POST['bus_no'];
        $route =$_POST['route'];
        $unit =$_POST['unit'];
        $cor=$_POST['cor'];
        $dName =$_POST['dName'];
        $cName =$_POST['cName'];
        $time =$_POST['time'];

        $query = "UPDATE bus_stamby SET id='$id',bus_no='$bus_no',route_destination='$route',unit='$unit',cor_number='$cor',drivers_name='$dName',conductors_name='$cName',departure_time
        ='$time' WHERE id='$id' ";

        $result = mysqli_query($conn,$query);

        if($result)
        {
            header('location:2Admin-BusAtTerminal.php');
        }
        else 
        {
            echo 'woow';
        }
                

    }

?>