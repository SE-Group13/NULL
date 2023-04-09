<!DOCTYPE html>
<html lang="en">
    <body>

        <header>
            <nav class="p-1 background-tundora container">
                <a class="h2 text-white floatLeft" href="index.php"> Pet Minder App </a>

                <figure class = "navMargin text-white floatRight"> 
                    <img id = "headerIcon" src="Images/headerIcon.png" alt="logoIcon"> <!-- Image source is relative to the page that runs the footer -->
                </figure>

                <?php
                    // If the user_id hasn't been set, it must be a guest who hasn't logged in
                    if (isset($_SESSION['user_type']) !== TRUE){
                        echo("Guest User");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="loginPage.php">Log in</a></li>
                                <li><a class="text-white" href="register.php">Register</a></li>
                            </ul>
                        <?php
                    }
                    // user_type 0 is Pet Owner
                    elseif ($_SESSION['user_type'] == 0) {
                        echo("Pet Owner");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="#1">Post Jobs</a></li>
                                <li><a class="text-white" href="owner_jobs.php">Current Jobs</a></li>
                                <li><a class="text-white" href="PHP Scripts/logout.php">Log Out</a></li>
                            </ul>
                        <?php
                    }
                    // user_type 0 is Service Provider
                    elseif ($_SESSION['user_type'] == 1){
                        echo("Service Provider");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="#1">View Interested Jobs</a></li>
                                <li><a class="text-white" href="jobs.php">View Jobs</a></li>
                                <li><a class="text-white" href="PHP Scripts/logout.php">Log Out</a></li>
                            </ul>
                        <?php
                    } 

                ?>
            </nav>
        </header>

    </body>
</html>