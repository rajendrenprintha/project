<?php
// Start or resume a session
session_start();

// Destroy the session and redirect to the login page
session_destroy();
header('Location: FrontPage.php');
exit();
?>