<?php
include 'Connection.php';
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
      <input type="text" class="form-control" name="bus_no" placeholder="Enter Bus Number">
    </div>
  <!-- Route Destination Container -->
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Route Destination</label>
      <input type="text" class="form-control" name="route" placeholder="Route Destination">
    </div>
  <!-- Unit Container -->
    <div class="col-md-4">
      <label for="inputState" class="form-label">Unit</label>
      <select name="unit" class="form-select">
        <option selected>Unit</option>
        <option>Air Condation</option>
        <option>Not Air Condation</option>
      </select>
    </div>
  <!-- Cor Number Container -->
    <div class="col-12">
      <label for="inputAddress2" class="form-label">COR Number</label>
      <input type="text" class="form-control" name="cor" placeholder="Enter Bus Number">
    </div>
  <!-- Driver's Name Container -->
    <div class="col-12">
      <label for="inputAddress" class="form-label">Driver's Name</label>
      <input type="text" class="form-control" name="dName" placeholder="Enter Driver's Name">
    </div>
  <!-- Conductor's Name Container -->
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Conductor's Name</label>
      <input type="text" class="form-control" name="cName" placeholder="Enter Conductor's Name">
    </div>
  <!-- Time Container -->
    <div class="col-12">
      <label for="inputAddress" class="form-label">Time Departured</label>
      <input type="time" class="form-control" name="time" placeholder="Time Departured">
    </div>
  <!-- Submit Button Container -->
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary"></button>
  </div>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
  $bus_no = $_POST['bus_no'];
  $route =$_POST['route'];
  $unit =$_POST['unit'];
  $cor=$_POST['cor'];
  $dName =$_POST['dName'];
  $cName =$_POST['cName'];
  $time =$_POST['time'];

  $query = "INSERT INTO bus_stamby (bus_no,route_destination,unit,cor_number,drivers_name,conductors_name,departure_time) VALUES ('$bus_no', '$route', '$unit', '$cor', '$dName', '$cName' ,'$time')";

  $result = mysqli_query($conn,$query);

  if($result)
  {
     header('Location:2Admin-BusAtTerminal.php');
  }
  else
  {
    echo 'woow';
  }

 
}
?>