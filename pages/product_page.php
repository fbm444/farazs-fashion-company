<?php

// Faraz Merchant, 3/01/24, IT202 002, Phase 02, fbm@njit.edu //

session_start();
require_once("database.php");


$FashionCategoryID = filter_input(INPUT_GET, 'FashionCategoryID', FILTER_VALIDATE_INT);
if ($FashionCategoryID == NULL || $FashionCategoryID == FALSE) {
    $FashionCategoryID = 1;
}


$queryCategory = 'SELECT * FROM FarazsFashionCategories 
                WHERE FashionCategoryID = :FashionCategoryID';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':FashionCategoryID', $FashionCategoryID);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['FashionCategoryName'];
$statement1->closeCursor();


$queryAllCategories = 'SELECT * FROM FarazsFashionCategories 
                        order by FashionCategoryID';
$s2 = $db->prepare($queryAllCategories);
$s2->execute();
$categories = $s2->fetchALL();
$s2->closeCursor();


$queryAllProducts = 'SELECT * FROM FarazsFashionProducts
                    WHERE FashionCategoryID = :FashionCategoryID';
$s3 = $db->prepare($queryAllProducts);
$s3->bindValue(':FashionCategoryID', $FashionCategoryID);
$s3->execute();
$products = $s3->fetchAll();
$s3->closeCursor();

?>


<html>


<?php include('header.php') ?>
<head>
    <title>Product Page | Faraz's Fashion</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/productpage.css">

</head>

<body>

<main>


    <?php if (isset($delete_status)){ ?>
    <h2 id="delete_status"> <?php echo $delete_status; ?>
        <?php } ?>

        <h1>Product Catalog</h1>
        <aside>
            <h2>Product Categories:</h2>
            <nav id="categories">
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="?FashionCategoryID=<?php echo $category['FashionCategoryID']; ?>">
                                <?php echo $category['FashionCategoryName']; ?> </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <div>
            <h2>Selected Category: <br> <span><?php echo $category_name ?></span></h2>

            <table>
                <th>Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Color</th>
                <th>Price</th>
                <?php if ($_SESSION && $_SESSION['is_valid_admin']) { ?>
                    <th>Delete</th>
                <?php } ?>

                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <a href="details.php?code=<?php echo $product['FashionProductCode'] ?>"><?php echo $product['FashionProductCode'] ?>
                                <a></td>
                        <td><?php echo $product['FashionProductName'] ?></td>
                        <td><?php echo $product['FashionDescription'] ?></td>
                        <td><?php echo $product['FashionProductColor'] ?></td>
                        <td><?php echo "$" . number_format($product['FashionPrice'], 2) ?></td>

                        <?php if ($_SESSION && $_SESSION['is_valid_admin']) { ?>
                            <td>
                                <form id="delete" action="delete_product.php" method="post">
                                    <input type="hidden" name="fashion_id"
                                           value="<?php echo $product['FashionID']; ?>">
                                    <input type="hidden" name="category_id"
                                           value="<?php echo $product['FashionCategoryID']; ?>">
                                    <input id="delete_button" type="submit" value="Delete" onclick="confirm_delete()">
                                </form>
                            </td>
                        <?php } ?>

                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
</main>


<body>

<script>

    function confirm_delete() {
        const confirm_delete = confirm("Are you sure you want to delete this product?");
        if (!confirm_delete) {
            event.preventDefault();
        }
    }
</script>


<?php include('footer.php') ?>

</html>