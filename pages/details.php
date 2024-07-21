<!-- Faraz Merchant, 4/19/24, IT202 002, Phase 05, fbm@njit.edu  -->
<?php
include("database.php");
$code = filter_input(INPUT_GET, 'code');

$query = 'SELECT * 
            FROM FarazsFashionProducts 
            WHERE FashionProductCode = :code';


$statement = $db->prepare($query);
$statement->bindValue(':code', $code);
$statement->execute();
$product = $statement->fetch();
$statement->closeCursor();

if ($product === false) {
    $valid_product = false;
} else {
    $valid_product = true;
}

?>
<html>


<?php include('header.php') ?>
<head>
    <title>Details | Faraz's Fashion</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/details.css">

</head>

<body>

<main>

    <?php if ($valid_product) { ?>
        <table>
            <th>Code</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Color</th>
            <th>Price</th>


            <tr>
                <td>
                    <a href="details.php?code=<?php echo $product['FashionProductCode'] ?>"><?php echo $product['FashionProductCode'] ?>
                        <a></td>
                <td><?php echo $product['FashionProductName'] ?></td>
                <td><?php echo $product['FashionDescription'] ?></td>
                <td><?php echo $product['FashionProductColor'] ?></td>
                <td><?php echo "$" . number_format($product['FashionPrice'], 2) ?></td>
            </tr>

        </table>

        <?php
        $file_name = "../images/" . $code . "_color.jpg";
        if (file_exists($file_name)) {
            ?>
            <img id="product_img" src="../images/<?php echo $code ?>_color.jpg" alt="Product Image">
        <?php } else {
        } ?>

    <?php } else { ?>

        <h1 class="error"> Uh Oh! That product does not exist!</h1>

    <?php } ?>

</main>

<body>


<script
        src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
        crossorigin="anonymous">
</script>
<script src="../scripts/details.js"></script>


<?php include('footer.php') ?>

<html>