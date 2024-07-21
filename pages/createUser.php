<?php
require_once('database.php');

$db = getDatabase();
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');

if ($email && $password && $firstName && $lastName) {
    $query = 'SELECT firstName 
            FROM FarazsFashionManagers 
            WHERE emailAddress = :email';


    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();

    if ($row === false) {
        $passHash = password_hash($password, PASSWORD_DEFAULT);
        $query2 = "INSERT INTO FarazsFashionManagers (emailAddress, password, firstName, lastName, dateCreated)
               VALUES (:email, :passHash, :firstName, :lastName, NOW())";
        $statement = $db->prepare($query2);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':passHash', $passHash);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
        $login_message = 'User Created Successfully';
        include('login.php');
        exit();

    } else if ($row) {
        $signup_message = 'User Already Exists';
        include('signup.php');
        exit();
    }

} else {

    $signup_message = 'Please enter all required fields';
    include('signup.php');
    exit();

}

?>