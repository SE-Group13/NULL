<?php 
    include ("path.php");                       // Sets a base path to the root
    require (ROOT . "/login.php");              // Used to test account features

    // print_r($_SESSION);
    // echo("<br>")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Minder App</title>

        <link href='https://fonts.googleapis.com/css?family=Zen Kaku Gothic Antique' rel='stylesheet'> <!--Imports a Google Font-->
        <link rel="stylesheet" href="CSS/register.css">
    </head>

    <body>
        <?php include_once(ROOT . '/PHP Scripts/header.php') ?>

        <div class = "container content">
            <div class = "homeBoxWrapper">
                <div class = "homeBox">
                            <h1>Sign Up</h1>
                <form action="signup.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>

                    <input type="submit" value="Sign Up">
                </form>

                </div>
                <img src="Images/indexPhotos/homeBoxPhotos/trustpilot_v2.svg" alt="">
            </div>
    
            

            
                </div>
            </div>
        </div>

        <?php include_once (ROOT . '/PHP Scripts/footer.php') ?> <!-- Footer is always the same -->
    </body>
</html>
