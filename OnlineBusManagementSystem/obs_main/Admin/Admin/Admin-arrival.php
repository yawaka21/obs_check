<?php
    include("sidevar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrival</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-busInformation.css">

</head>
<body>
    
<div class="tableContainer">
    <button type="button" class="btn btn-primary"><a style="color: white; text-decoration:none;" href="Admin-arrival.php">Add</a></button>
        <table class="table table-success table-striped">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">DEPARTURED</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">DRIVER'S NAME</th>
            <th scope="col">CONDUCTOR'S NAME</th>
            <th scope="col">Operation</th>
            
        </tr>
            </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>064310</td>
                    <td>10:00</td>
                    <td>Danao City</td>
                    <td>ALC</td>
                    <td>BATMAN</td>
                    <td>ROBIN</td>
                    <td><button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                
                </tbody>
        </table>
</div> 
</body>
</html>