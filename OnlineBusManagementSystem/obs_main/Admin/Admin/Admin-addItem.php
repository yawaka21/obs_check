<?php
    include("sidevar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="style-busInformation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="tableContainer">
<button type="button" class="btn btn-success">Add Item</button>
    <table class="table table-success table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Buss Number</th>
                <th scope="col">Drivers Name</th>
                <th scope="col">Conductor's Name</th>
                <th scope="col">Unit</th>
                <th scope="col">Item Description</th>
                <th scope="col">Date</th>
                <th scope="col">Operation</th>
                
            </tr>
        </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>064310</td>
                    <td>Jonel D. Gelig</td>
                    <td>Secret D. Luffy</td>
                    <td>AC</td>
                    <td>Bag</td>
                    <td>08/29/2023</td>
                    <td>
                    <button type="button" class="btn btn-info">Details</button>
                    <button type="button" class="btn btn-success">Edit</button>
                    
                    </td>
                </tr>
            
            </tbody>
    </table>
</div> 
</body>
</html>