<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Add Arrivals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form class="row g-3">

 <!-- BUS NUMBER CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Bus Number</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Enter Bus Number">
</div>

<!-- DEPARTURE TIME CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Departure Time</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Enter time of Departure">
</div>

<!-- DESTINATION INPUT -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Destination</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Enter Destination">
</div>

<!--TYPE OF UNIT -->
<div class="col-md-4">
  <label for="inputState" class="form-label">Unit</label>
  <select id="inputState" class="form-select">
    <option selected>Unit</option>
    <option>Air Condation</option>
    <option>Not Air Condation</option>
  </select>
</div>

<!-- DRIVER'S NAME CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Driver's Name</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Enter Driver's Name">
</div>

<!-- CONDUCTOR'S NAME CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Conductor's Name</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Enter Conductor's Name">
</div>

<!-- SUBMIT -->
<div class="col-12">
  <button type="submit" class="btn btn-primary"> <a href="Admin/Admin-arrival.php">Sign in</a></button>
</div>
</form>

</body>
</html>
