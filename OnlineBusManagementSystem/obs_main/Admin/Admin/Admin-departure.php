<?php
    include("sidevar.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-busInformation.css">
</head>
<body>
    
<div class="tableContainer">
        <table class="table table-success table-striped">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">DEPARTURED</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">PASSENGER</th>
            <th scope="col">DRIVER'S NAME</th>
            <th scope="col">CONDOCTOR'S NAME</th>
            <th scope="col">Operation</th>
            
        </tr>
            </thead>
                <tbody>
              <?php
                    include('Connection.php');
                    $sql = "SELECT *FROM departure_tb";
                    $result = mysqli_query($conn,$sql);
                    
                    if($result)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row['id'];
                            $bus_no = $row['bus_no'];
                            $time_dept = $row['time_dept'];
                            $route = $row['route_destination'];
                            $unit = $row['unit'];
                            $passenger = $row['passenger'];
                            $dName = $row['drivers_name'];
                            $cName = $row['conductors_name'];

                            echo
                            '
                            <tr>
                                 <th scope="row">'.$id.'</th>
                                 <td>'.$bus_no.'</td>
                                 <td>'.$time_dept.'</td>
                                 <td>'.$route.'</td>
                                 <td>'.$unit.'</td>
                                 <td>'.$passenger.'</td>
                                 <td>'.$dName.'</td>
                                 <td>'.$cName.'</td>
                                 <td><button type="button" class="btn btn-success"><a href="#">Arrived</a></button></td>
                            </tr>
                            ';
                        }
                    }
              ?>
                </tbody>
        </table>
</div> 
</body>
</html>