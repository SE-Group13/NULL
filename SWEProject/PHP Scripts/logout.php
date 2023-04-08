<?php
    unset($_SESSION['user_type']);
    session_unset();
    session_destroy();
    header('Location: ../index.php');
    exit();
?>