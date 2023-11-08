<?php
include 'Connection.php';

if (isset($_GET['releaseid'])) {
    $id = $_GET['releaseid'];
    $sql = "SELECT * FROM management_tb WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $bus_no = $row['bus_no'];
        $time_dept = $row['time_dept'];
        $route = $row['route_destination'];
        $unit = $row['unit'];
        $cor = $row['cor_number'];
        $passTicket = $row['pass_ticket'];
        $baggTicket = $row['bagg_ticket'];
        $passenger = $row['passenger'];
        $dName = $row['drivers_name'];
        $cName = $row['conductors_name'];

        $save_query = "INSERT INTO main_tb (bus_no, time_dept, route_destination, unit, cor_number, pass_ticket, bagg_ticket, passenger, drivers_name, conductors_name, date) VALUES ('$bus_no', '$time_dept', '$route', '$unit', '$cor', '$passTicket', '$baggTicket', '$passenger', '$dName', '$cName', NOW())";

        $result1 = mysqli_query($conn, $save_query);

        if ($result1) {
            
            $departure = "INSERT INTO departure_tb (bus_no,time_dept,route_destination,unit,passenger,drivers_name,conductors_name)VALUES('$bus_no','$time_dept','$route','$unit','$passenger','$dName','$cName')";
            $result2 = mysqli_query($conn,$departure);
            if($result2)
            {
                $delete = "DELETE FROM management_tb WHERE id = $id";
                $result3 = mysqli_query($conn,$delete);

                if($result3)
                {
                    header('location:Admin-departure.php');
                }
                else
                {

                }
             }
        } else {
            
        }
    } else {
        
    }
}
?>
