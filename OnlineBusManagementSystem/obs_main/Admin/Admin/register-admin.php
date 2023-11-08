<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Inter:wght@500;600;
                700&family=Kaushan+Script&family=Montserrat&family=Roboto+Slab&family=Roboto:wght@300&display=swap" 
                rel="stylesheet">
                <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Inter:
        wght@300;500;600;700&family=Kaushan+Script&family=Montserrat&family=Roboto+Mono:wght@300&family=Roboto+Slab&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style-register-admin.css">
<title>Admin</title>

</head>
<body>
    <div class="containerForm">
        <div class="containerPicture">
            <img src="imgaes/adminlogo.jpg" alt="">
        </div>
        <p class="adminP">Admin</p>


        <form action="register-admin.php" method="post">
            <label for="">Username:</label>
            <input type="text" name="username"><br>
            <label for="">Password:</label>
            <input class="pass" type="password" name="password"> <br>
            <button type="submit" name="register">Register</button>

        </form>
    </div>
</body>
</html>

<?php
    include 'connection.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash = password_hash($password,PASSWORD_DEFAULT);

    $sql = "";

    if(isset($_POST["register"]))
    {
        if(empty($_POST["username"]))
        {
            echo "Please enter a username";
        }
        elseif(empty($_POST["password"]))
        {
            echo "Please enter a password";
        }
        else
        {  try
            {
                $sql = "INSERT INTO admin (username,password)VALUES('$username','$hash')";
                mysqli_query($conn,$sql);
            }

            catch(mysqli_sql_exception)
            {
                echo "Error";
            }
           
        }
        
    }
?>