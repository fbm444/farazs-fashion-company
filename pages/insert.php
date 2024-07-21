<!-- Faraz Merchant, 3/22/24, IT202 002, Phase 02, fbm@njit.edu -->
<?php 

require_once('database.php');

$error_message = false;
$code = filter_input(INPUT_POST, 'code');
$category_id = filter_input(INPUT_POST, 'category_id');
$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$color = filter_input(INPUT_POST, 'color');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);


$query = 'SELECT FashionProductCode from FarazsFashionProducts';
$s1 = $db -> prepare($query);
$s1 -> execute();
$codes = $s1 -> fetchAll();
$s1 -> closeCursor();


foreach ($codes as $fashioncode):
    if (in_array($code, $fashioncode)){
        $error_message .= 'Please enter a unique code. <br>';
        $code = "";
        break;
    }
endforeach;



if ($price < 0 || $price > 100000 || $price === false){
    $price = null;
    $error_message .= 'Please enter a valid price below $100,000';
}

if (!empty($error_message)){
    include ('create.php');
    exit();

} else {
   
    $query2 = " INSERT INTO FarazsFashionProducts
    (FashionCategoryID, FashionProductCode, FashionProductName, FashionDescription, FashionProductColor, FashionPrice,
    DateCreated)
    VALUES
    (:FashionCategoryID, :FashionProductCode, :FashionProductName, :FashionDescription, 
    :FashionProductColor, :FashionPrice, NOW())";

$statement = $db->prepare($query2);
$statement->bindValue(':FashionCategoryID', $category_id);
$statement->bindValue(':FashionProductCode', $code);
$statement->bindValue(':FashionProductName', $name);
$statement->bindValue(':FashionDescription', $description);
$statement->bindValue(':FashionProductColor', $color);
$statement->bindValue(':FashionPrice', $price);
$success = $statement -> execute();
$statement->closeCursor();

$status = "Success! Your Product Has Been Added!";

$error_message = false;
$code = "";
$name = "";
$description = "";
$color = "";
$price = "";
include ('create.php');
exit();

}

?>