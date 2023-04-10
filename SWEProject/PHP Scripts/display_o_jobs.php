<?php

include("filter_jobs.php");


$displayed_jobs = isset($_SESSION['filtered_jobs']) ? $_SESSION['filtered_jobs'] : $jobs;

if (empty($displayed_jobs)) {
    echo '<p> No jobs found.</p>';
} else {
    foreach ($displayed_jobs as $job) {
        // Build the image file path
        $image_path = "Images/PetImages/" .  $job['image'];
        if ($job['userid']==$_SESSION['user_id']){
            echo '<div class="job-box">';
            echo '<div>';
            echo '<h2 class="job-title">' . $job['title'] . '</h2>';
            echo '</div>';
            echo '<div class="job-description">';
            echo '<h3 class="job-date">Start date: ' . date('d F Y', strtotime(substr($job['date'], 0, 10))) . '</h3>';
            echo '<p class="description">'. $job['description'] . '</p>';
            echo '<img class="pet-image" src="' . $image_path . '" alt="Pet Image">';
            echo '</div>';
            echo '<button class="see-job-btn"><a href="owner_view_job.php?id=' . $job['id'] . '">View Details</a></button>';
            echo '</div>';
        }

    }
}

?>