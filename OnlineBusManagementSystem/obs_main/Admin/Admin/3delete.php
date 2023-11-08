<?php
    include 'Connection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        
        $sql = "DELETE FROM management_tb WHERE id = $id";
        
        $result = mysqli_query($conn,$sql);
        
        if($result)
        {
            header('location:3Admin-Management.php');
        }
        
    }
?>