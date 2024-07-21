<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu

require_once('admindb.php');

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (is_valid_admin_login($email, $password)) {

    session_start();
    $db = getDatabase();

    $query = 'SELECT firstName, lastName 
    FROM FarazsFashionManagers 
    WHERE emailAddress = :email';

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetchAll();
    $statement->closeCursor();

    $_SESSION['is_valid_admin'] = true;
    $_SESSION['email'] = $email;


    $_SESSION['firstName'] = $row[0][0];
    $_SESSION['lastName'] = $row[0][1];
    $welcome = "Welcome" . ", " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " ($_SESSION[email])";

    include('../index.php');
    exit();

} else {

    $login_message = 'Invalid credentials.';
    include('login.php');
    exit();

}


?>


