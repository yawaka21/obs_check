<?php
    include("sidevar.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style-Main-index.css" rel="stylesheet">
  

</head>
<body>
    
<div class="tableContainer">
    <button type="button" class="btn btn-primary"><a style="color: white; text-decoration:none;" href="Main-Add.php">Add</a></button>
        <table class="table table-success table-striped">
            <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">ASSIGNED</th>
            <th scope="col">TIME</th>
            <th scope="col">ROUTE</th>
            <th scope="col">TYPE</th>
            <th scope="col">C.O.R</th>
            <th scope="col" colspan="2">OPENING TICKET STUB NO.</th>
            <th scope="col">TOTAL</th>
            <th scope="col">DRIVER'S</th>
            <th scope="col">CONDUCTOR'S</th>
            <th scope="col">Date</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">DEPARTURED</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">NUMBER</th>
            <th scope="col">PASS.TICKET</th>
            <th scope="col">BAGG.TICKET</th>
            <th scope="col">PASSENGER</th>
            <th scope="col">NAME</th>
            <th scope="col">NAME</th>
            <th scope="col">Date</th>
        </tr>
            </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>064310</td>
                    <td>10:00</td>
                    <td>Danao City</td>
                    <td>ALC</td>
                    <td>5625</td>
                    <td>5185409</td>
                    <td>654980</td>
                    <td>15</td>
                    <td>BATMAN</td>
                    <td>ROBIN</td>
                    <td>06/27/2023</td>
                    </tr>
                
                </tbody>
        </table>
</div> 
</body>
</html>