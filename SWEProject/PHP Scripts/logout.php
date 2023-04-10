<?php
    session_start();
    unset($_SESSION['user_type']);
    header('Location: ../index.php');
    exit();
?>