<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu
require_once("database.php");

$fashion_id = filter_input(INPUT_POST, 'fashion_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

if ($fashion_id != NULL && $category_id != false) {
    $statement = 'DELETE FROM FarazsFashionProducts WHERE FashionID = :fashion_id';
    $s1 = $db->prepare($statement);
    $s1->bindValue(':fashion_id', $fashion_id);
    $success = $s1->execute();
    $s1->closeCursor();

    $delete_status = "Your product has successfully been removed!";

}

include("product_page.php");

?>