<?php

require (ROOT . "/login.php");

// Read the JSON file
$json_data = file_get_contents(ROOT . "/Data/jobs.json");

// Convert the JSON data to a PHP array
$jobs = json_decode($json_data, true);

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
    // Get the input data from the request
    $pet_type = isset($_POST['pet_type']) ? trim($_POST['pet_type']) : '';
    $city = isset($_POST['city']) ? trim($_POST['city']) : '';
    $neighbourhood = isset($_POST['neighbourhood']) ? trim($_POST['neighbourhood']) : '';
    $minPrice = isset($_POST['minPrice']) ? trim($_POST['minPrice']) : '';
    $date = isset($_POST['date']) ? substr($_POST['date'], 0, 10) : '';
    
    // Loop through the users array and filter based on the input data
    $filtered_jobs = array();
    
    foreach ($jobs as $job) {
        // Check if any of the input data is empty
        if (!empty($pet_type) && ($pet_type !== "all") && (strpos(strtolower($job['pet_type']), strtolower($pet_type)) === false)) {
            continue;
        }
    
        if (!empty($minPrice) && $job['budget'] < $minPrice) {
            continue;
        }
    
        if (!empty($city) && strpos(strtolower($job['city']), strtolower($city)) === false) {
            continue;
        }
    
        if (!empty($neighbourhood) && strpos(strtolower($job['neighbourhood']), strtolower($neighbourhood)) === false) {
            continue;
        }

        // Check if the date of the job is different from the selected date
        if (!empty($date) && date("Y-m-d", strtotime($job['date'])) != $date) {
            continue;
        }
    
        // If the job passes all the filters, add them to the filtered_jobs array
        $filtered_jobs[] = $job;
    }
    
    // Store filtered jobs in session variable
    $_SESSION['filtered_jobs'] = $filtered_jobs;
}