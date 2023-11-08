<?php
    include 'Connection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];

        $query = "DELETE FROM main_tb WHERE id = $id";

        $result = mysqli_query($conn,$query);
        
        if($result)
        {
           header('location:1Admin-History.php');
        }
    }
?>