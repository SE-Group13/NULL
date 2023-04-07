<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // $_SESSION['id'] = $user['id'];
    $_SESSION['user_id'] = 0;

?>
