<?php include("path.php") ?>
<?php require ("login.php") ?>
<?php include (ROOT . "/PHP Scripts/show_interest.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="CSS/design.css" />
	<link rel="stylesheet" href="CSS/jobs.css" />
    <script defer src="JS/show_interest.js"></script>
	<title>View details</title>
</head>

<body>
    <?php
    include ROOT . "/PHP Scripts/header.php" ?>

	<div class="container content cont">
		<div class="intro">
			<h1 class="title">Job Details</h1>
			<h2 class="subtitle">Everything you need to know about this pet sitting job</h2>
		</div>

		<div class="job-details-container">
            <?php

                // Get the job ID from the URL query string
                
                if (isset($_GET['id'])) {
                    $_SESSION['view_job_id'] = $_GET['id'];
                }

                if (isset($_SESSION['view_job_id'])) {
                    // handle case where $job_id is not null
                    // Load the jobs from the JSON file
                    $jobs = json_decode(file_get_contents(ROOT . "/Data/jobs.json"), true);

                    // Get the job details by ID
                    $job = $jobs[$_SESSION['view_job_id']];

                    // Build the image file path
                    $image_path = "Images/PetImages/" .  $job['image'];
                    
                    // Display the job details
                    echo '<div class="job-details">';
                    echo '<h2 class="job-title">' . $job['title'] . '</h2>';
                    echo '<p>' . $job['description'] . '</p>';
                    echo '<p>Pet type: ' . $job['pet_type'] . '</p>';
                    echo '<p>City: ' . $job['city'] . '</p>';
                    echo '<p>Neighbourhood: ' . $job['neighbourhood'] . '</p>';
                    echo '<p>Date: ' . date('d F Y', strtotime(substr($job['date'], 0, 10))) . '</p>';
                    echo '<p>Budget: ' . $job['budget'] . '£' . '</p>';
                    echo '</div>';
                    echo '<img class="pet-image-bigger" src="' . $image_path . '" alt="Pet Image">';
                }
            ?>

		</div>
        <?php

        if (isset($_GET['id']) and ( isset($_SESSION['user_type']) and $_SESSION['user_type'] == 1) or (isset($_GET['type']) and $_GET['type']==1 )) {
            echo '<form method="POST" action="viewJob.php" id="show-interest-form">';
            echo     '<fieldset class="show-interest-form">';
            echo         '<legend>Introduce yourself! </legend>';
            echo         '<div class="show-interest-input">';
            echo             '<textarea name="content" class="show-interest-message" id="content" placeholder="Enter your message here" rows="10"></textarea>';
           echo              '<button class="show-interest-btn" type="submit" value="Show">Show Interest</button>';
           echo          '</div>';
           echo      '</fieldset>';
           echo  '</form>';
            } elseif (( isset($_SESSION['user_type']) and $_SESSION['user_type'] == 1)) {
            echo '<div class="job-details">';
           echo      '<h2 class="confirmation-message">Your interest has been successfully registered!</h2>';
           echo  '</div>';
            echo '<a href="http://localhost/Pet_Minder/SWEProject/jobs.php">';
            echo     '<button class="show-interest-btn">Go back to all posts</button>';
           echo  '</a>';
        }
        ?>
	</div>
    <script>
        function openPopup() {
            window . open("/Pet_Minder/SWEProject/interest_minder/show_interest_list.php?id=' . $_GET["id"] . '", MInder List, width=600,height=400)
        }
    </script>


    <?php
        if( (isset($_SESSION['user_type']) and $_SESSION['user_type'] == 0) or (isset($_GET['type']) and $_GET['type']==0 )) { ?>
            <button class="show-interest-btn" onclick="openPopup()">Show Interest Minders</button>
    <?php    }
    ?>

    <?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>

</html>