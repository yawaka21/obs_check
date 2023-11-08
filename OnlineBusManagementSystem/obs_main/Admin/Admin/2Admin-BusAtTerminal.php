<?php
    include 'sidevar.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus at Terminal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-busInformation.css">
</head>
<body>
<div class="tableContainer">
    <button type="button" class="btn btn-primary"><a style="color: white; text-decoration:none;" href="2BusAtTerminal.php">Add</a></button>
        <table class="table table-success table-striped">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">Cor Number</th>
            <th scope="col">Driver's Name</th>
            <th scope="col">Conductor's Name</th>
            <th scope="col">Departure Time</th>
            <th scope="col" colspan="3">Operation</th>
            
            
        </tr>
            </thead>
                <tbody>

                <?php
                include 'Connection.php';
                $query = "SELECT *FROM bus_stamby";

                $result = mysqli_query($conn,$query);
    
                if($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $bus_no = $row['bus_no'];
                        $route = $row['route_destination'];
                        $unit = $row['unit'];
                        $cor_number = $row['cor_number'];
                        $drivers_name = $row['drivers_name'];
                        $conductors_name = $row['conductors_name'];
                        $departure_time = $row['departure_time'];

                        
                        echo'
                        <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$bus_no.'</td>
                        <td>'.$route.'</td>
                        <td>'.$unit.'</td>
                        <td>'.$cor_number.'</td>
                        <td>'.$drivers_name.'</td>
                        <td>'.$conductors_name.'</td>
                        <td>'.$departure_time.'</td>
                        <td><button type="button" class="btn btn-primary"><a href="2Edit.php?updateid='.$id.'">Update</a></button></td>
                        <td><button type="button" class="btn btn-success"><a href="2Save.php?saveid='.$id.'">Save</a></button></td>
                        <td><button type="button" class="btn btn-danger"><a href="2delete.php?deleteid='.$id.'">Delete</a></button></td>
                        
                        </tr>
                        ';
                    }
                }
                else
                {

                }
                ?>
                    <!-- <tr>
                    <th scope="row">1</th>
                    <td>064310</td>
                    <td>10:00</td>
                    <td>Danao City</td>
                    <td>ALC</td>
                    <td>15</td>
                    <td>BATMAN</td>
                    <td>ROBIN</td>
                    <td>06/27/2023</td>
                    <td><button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    </tr> -->
                
                </tbody>
        </table>
</div> 
</body>
</html>