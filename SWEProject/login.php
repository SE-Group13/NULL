<?php

    // Leon: Redid the session starting code
    if (session_status() === PHP_SESSION_NONE) { session_start(); }
   
 
    // Read the JSON file
    $json_data = file_get_contents(ROOT . "/Data/users.json");
    // Convert the JSON data to a PHP array
    $users = json_decode($json_data, true);

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the input data from the request
        $username = isset($_POST['username']) ? strtolower(trim($_POST['username'])) : '';
        $password = isset($_POST['password']) ? strtolower(trim($_POST['password'])) : '';

        // Loop through the users array based on the input data
        $filtered_jobs = array();

        foreach($users as $user){
            if ($username == strtolower($user['username']) && $password == strtolower($user['password'])){
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['user_id'] = $user['id'];             // Leons Modification
                header("Location: index.php");
            }
        }
        // echo"<p> no match</p>";
    }
?>
