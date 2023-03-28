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
    <?php include ROOT . "/PHP Scripts/header.php" ?>

	<div class="container content cont">
		<div class="intro">
			<h1 class="title">Job Details</h1>
			<h2 class="subtitle">Everything you need to know about this pet sitting job</h2>
		</div>

		<div class="job-details-container">
            <?php
                
                // Generate a random number between 0 and 9
                $random_number = random_int(0, 10);

                // Build the image file path
                $image_path = "Images/image" . strval($random_number) . '.jpeg';

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
        <?php if (isset($_GET['id'])) { ?>
            <form method="POST" action="viewJob.php" id="show-interest-form">
                <fieldset class="show-interest-form">
                    <legend>Introduce yourself! </legend>
                    <div class="show-interest-input">
                        <textarea name="content" class="show-interest-message" id="content" placeholder="Enter your message here" rows="10"></textarea>
                        <button class="show-interest-btn" type="submit" value="Show">Show Interest</button>
                    </div>
                </fieldset>
            </form>
        <?php } else { ?>
            <div class="job-details">
                <h2 class="confirmation-message">Your interest has been successfully registered!</h2>
            </div>
            <a href="http://localhost/Pet_Minder/SWEProject/jobs.php">
                <button class="show-interest-btn">Go back to all posts</button>
            </a>
        <?php } ?>
	</div>

    <?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>

</html>