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
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>

</head>
<body>
    <div class="containerForm">
        <div class="containerPicture">
            <img src="imgaes/adminlogo.jpg" alt="">
        </div>
        <p class="adminP">Admin</p>


        <form action="admin.php" method="post">
            <label for="">Username:</label>
            <input type="text" name="username"><br>
            <label for="">Password:</label>
            <input class="pass" type="password" name="password"> <br>
            <button><a href="Admin-busInformation.php">Log in</a></button>
        </form>

        <a href="register-admin.php"> <p class="registerp">Register</p></a>
    </div>
</body>
</html>

