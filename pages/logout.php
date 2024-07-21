<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu

session_start();

$_SESSION = [];

session_destroy();

$login_message = 'You have been successfully logged out.';

include('login.php');

?>