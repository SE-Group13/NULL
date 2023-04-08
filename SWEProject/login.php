<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
        unset($_SESSION['user_type']);
    }
    // $_SESSION['id'] = $user['id'];
    $_SESSION['user_id'] = 0;
 
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
                unset($_SESSION['user_type']);
                $_SESSION['user_type'] = $user['user_type'];
                // echo "".$_SESSION["user_type"]."";
                // echo "".$user["user_type"]."";
                header("Location: index.php");
            }
        }
        // echo"<p> no match</p>";
    }
?>
