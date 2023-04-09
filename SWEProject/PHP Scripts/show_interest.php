<?php

include ("path.php");
require (ROOT . "/login.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the content and user ID from the form data
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];
    $job_id = $_SESSION['view_job_id'];

    // Load the existing messages from the JSON file
    $minders_list = json_decode(file_get_contents(ROOT . "/Data/interested_minders.json"), true);

    // Add the new message to the messages array
    $minders_list[] = [
        'user_id' => $user_id,
        'job_id' => $job_id,
        'content' => $content
    ];

    // Save the updated minders_list  to the JSON file
    if (!file_put_contents(ROOT . "/Data/interested_minders.json", json_encode($minders_list))) {
        echo "Failed to save interested minders list.";
    }
}

?>