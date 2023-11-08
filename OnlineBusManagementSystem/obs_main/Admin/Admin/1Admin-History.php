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
        <table class="table table-success table-striped">
            <thead>
                
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
                        <th scope="col"colspan="2">OPERATION</th>
                        
                    </tr>
            </thead>
                <tbody>
                    <?php
                        include("Connection.php");
                        $sql = "SELECT *FROM main_tb";
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
                               $cor_number = $row['cor_number'];
                               $pass_ticket = $row['pass_ticket'];
                               $bagg_ticket = $row['bagg_ticket'];
                               $passenger = $row['passenger'];
                               $d_name = $row['drivers_name'];
                               $c_name = $row['conductors_name'];
                               $time = $row['date'];

                               echo 
                               '
                                <tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$bus_no.'</td>
                                <td>'.$time_dept.'</td>
                                <td>'.$route.'</td>
                                <td>'.$unit.'</td>
                                <td>'.$cor_number.'</td>
                                <td>'.$pass_ticket.'</td>
                                <td>'.$bagg_ticket.'</td>
                                <td>'.$passenger.'</td>
                                <td>'.$d_name.'</td>
                                <td>'.$c_name.'</td>
                                <td>'.$time.'</td>
                                <td><button type="button" class="btn btn-primary"><a href="1Update.php?updateid='.$id.'">Update</a></button></td>
                                <td><button type="button" class="btn btn-danger"><a href="1delete.php?deleteid='.$id.'">Delete</a></button></td>
                                </tr>
                                
                               ';

                            }
                        }

                        else
                        {
                            echo    "no result";
                        } 
                    ?>
                
                </tbody>
        </table>
</div> 
</body>
</html>