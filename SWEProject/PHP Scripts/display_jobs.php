<?php

include("filter_jobs.php");


$displayed_jobs = isset($_SESSION['filtered_jobs']) ? $_SESSION['filtered_jobs'] : $jobs;
				
if (empty($displayed_jobs)) {
    echo '<p> No jobs found.</p>';
} else {
    foreach ($displayed_jobs as $job) {
        // Generate a random number between 0 and 9
        $random_number = random_int(0, 10);

        // Build the image file path
        $image_path = "Images/image" . strval($random_number) . '.jpeg';

        
        echo '<div class="job-box">';
        echo '<div>';
        echo '<h2 class="job-title">' . $job['title'] . '</h2>';
        echo '</div>';
        echo '<div class="job-description">';
        echo '<h3 class="job-date">Start date: ' . date('d F Y', strtotime(substr($job['date'], 0, 10))) . '</h3>';
        echo '<p class="description">'. $job['description'] . '</p>';
        echo '<img class="pet-image" src="' . $image_path . '" alt="Pet Image">';
        echo '</div>';
        echo '<button class="see-job-btn"><a href="viewJob.php?id=' . $job['id'] . '">View Details</a></button>';
        echo '</div>';
    }
}

?>