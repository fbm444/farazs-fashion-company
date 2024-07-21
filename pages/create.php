<!-- Faraz Merchant, 3/22/24, IT202 002, Phase 02, fbm@njit.edu -->

<?php

session_start();
if (!$_SESSION['is_valid_admin']) {
    $login_message = "You must sign in to view this page";
    include('login.php');
    exit();
}

require_once('database.php');
include('header.php');

$query_categories = 'SELECT * 
                     FROM FarazsFashionCategories
                    ORDER BY FashionCategoryID';
$s1 = $db->prepare($query_categories);
$s1->execute();
$categories = $s1->fetchAll();
$s1->closeCursor();


?>

<html>
<head>
    <title>Create Product | Faraz's Fashion</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/addproduct.css">

</head>

<body class="shipping">

<main>

    <?php if (!empty($error_message)) { ?>
        <div id="error"> <?php echo $error_message; ?> </div>
    <?php } ?>

    <?php if (!empty($status)) { ?>
    <h1 id="status"> <?php echo $status; ?>
        <h1>
            <?php } ?>


            <h1 id="form_label">Insert Product</h1>
            <form action="insert.php" method="post" id="create_form">


                <label>Category: </label>
                <select name="category_id">

                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['FashionCategoryID']; ?>">
                            <?php echo $category['FashionCategoryName']; ?>
                        </option>
                    <?php endforeach; ?>

                </select>

                <br>


                <label>Code:</label>
                <input id="code" type="text" name="code"
                       value="<?php if (isset($code)) echo htmlspecialchars($code); ?>">
                <span>*</span>
                <br>

                <label>Name:</label>
                <input id="name" type="text" name="name"
                       value="<?php if (isset($name)) echo htmlspecialchars($name); ?>">
                <span>*</span>
                <br>

                <label>Description:</label>
                <input id="description" type="text" name="description"
                       value="<?php if (isset($description)) echo htmlspecialchars($description); ?>">
                <span>*</span>
                <br>

                <label>Color:</label>
                <input id="color" type="text" name="color"
                       value="<?php if (isset($color)) echo htmlspecialchars($color); ?>">
                <span>*</span>
                <br>

                <label>Price:</label>
                <input id="price" type="text" name="price"
                       value="<?php if (isset($price)) echo htmlspecialchars($price); ?>">
                <span>*</span>
                <br>

                <input id="submit" type="submit" value="Add Product">
                <br>
                <input id="reset" type="reset" value="Clear">


            </form>

            <h3> <?php if (isset($output)) echo $output; ?> </h3>

</main>

</body>


<?php include('footer.php'); ?>

<script
        src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
        crossorigin="anonymous">
</script>

<script src="../scripts/create.js"></script>


</html>

