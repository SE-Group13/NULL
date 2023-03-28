<?php


session_start();
// $_SESSION['id'] = $user['id'];
$_SESSION['user_id'] = 2;




?>

<!-- Leon
    I've been using user id to test variable headers:
    0 = Guest
    1 = Pet Owner
    2 = Service Provider

    In the future I could replace checks for Guests with isset($_SESSION['user_id'])
-->