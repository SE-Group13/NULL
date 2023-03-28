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

                    if ($_SESSION['user_id'] == 0){
                        echo("Guest User");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="#1">Log in</a></li>
                                <li><a class="text-white" href="#2">Register</a></li>
                            </ul>
                        <?php
                    }
                    elseif ($_SESSION['user_id'] == 1) {
                        echo("Pet Owner");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="#1">Post Jobs</a></li>
                                <li><a class="text-white" href="#2">Current Jobs</a></li>
                                <li><a class="text-white" href="#3">Log Out</a></li>
                            </ul>
                        <?php
                    }
                    elseif ($_SESSION['user_id'] == 2){
                        echo("Service Provider");
                        ?>
                            <ul class="navMargin inlineList floatRight">
                                <li><a class="text-white" href="#1">View Interested Jobs</a></li>
                                <li><a class="text-white" href="jobs.php">View Jobs</a></li>
                                <li><a class="text-white" href="#3">Log Out</a></li>
                            </ul>
                        <?php
                    } 

                ?>
            </nav>
        </header>

    </body>
</html>