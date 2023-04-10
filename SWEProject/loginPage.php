<?php
// $_SESSION['id'] = $user['id'];

include("path.php");
include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <link href='https://fonts.googleapis.com/css?family=Zen Kaku Gothic Antique' rel='stylesheet'> <!--Imports a Google Font-->
    <title>Login</title>
</head>
<body>
    <?php include_once(ROOT . '/PHP Scripts/header.php') ?>

    <div class="login">
        <div class = "homeBoxWrapper">
                <div class = "homeBox">
                    <h1 class ="head" >Welcome!</h1>
                    <br>
                    <form action="loginPage.php" method="POST">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required><br>
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required><br>
                        <br>
                        <input class = "logbutton" type="submit" value="Login">
                    </form>
                </div>
                <br>
                <br>
            <img src="Images/indexPhotos/homeBoxPhotos/trustpilot_v2.svg" alt="">
        </div>
    </div>


    
    <?php include_once (ROOT . '/PHP Scripts/footer.php') ?> <!-- Footer is always the same -->
</body>
</html>
