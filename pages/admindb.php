<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu

function is_valid_admin_login($email, $password)
{

    require_once('database.php');

    $query = 'SELECT password 
            FROM FarazsFashionManagers 
            WHERE emailAddress = :email';

    $db = getDatabase();

    $statement = $db->prepare($query);

    $statement->bindValue(':email', $email);

    $statement->execute();

    $row = $statement->fetch();

    $statement->closeCursor();

    if ($row === false) {
        return false;

    } else {

        $hash = $row['password'];
        return password_verify($password, $hash);

    }

}


?>