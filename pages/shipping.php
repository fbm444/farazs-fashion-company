
<?php
// Faraz Merchant, 2/16/24, IT202 002, Phase 01, fbm@njit.edu 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['is_valid_admin'])) {
    $login_message = "You must sign in to view this page";
    include('login.php');
    exit();
}

if(!isset($first_name)) {$first_name = '';}
if(!isset($last_name)) {$last_name = '';}
if(!isset($street_address)) {$street_address = '';}
if(!isset($city)) {$city = '';}
if(!isset($state)) {$state = '';}
if(!isset($zip_code)) {$zip_code = '';}
if(!isset($ship_date)) {$ship_date = '';}
if(!isset($order_number)) {$order_number = '';}
if(!isset($height)) {$height = '';}
if(!isset($length)) {$length = '';}
if(!isset($width)) {$width = '';}
if(!isset($value)) {$value = '';}
?>


<html>

    <head>

        <title>Faraz's Fashion | Shipping</title>
        <link rel = "icon" href ="../images/logo.png">

    </head>

    <link rel = "stylesheet" href = "../styling/shipping.css">
    
    <body class="shipping">

        <?php include("header.php")?> 

        <?php if (!empty($error_message)) { ?>
        <div id = "error"> <?php echo $error_message; ?> </div>
        <?php } ?>

          
    
        <h2>Shipping Form</h2>
            
        <form action = "shipping_form.php" method = "post">
            <h3>To:</h3>

            <label>First Name: </label>
            <input type = "text" name = "first_name" value ="<?php echo htmlspecialchars($first_name)?>"/>
            <br>

            <label>Last Name</label>
            <input type = "text" name = "last_name" value ="<?php echo htmlspecialchars($last_name)?>"/>
            <br>

            <label>Street Address:</label>
            <input type="text" name="street_address" value = "<?php echo htmlspecialchars($street_address)?>"/>
            <br>

            <label>City:</label>
            <input type="text" name="city" value = "<?php echo htmlspecialchars($city)?>"/>
            <br>

            <label>State:</label>
            <input type="text" name="state" value = "<?php echo htmlspecialchars($state)?>"/>
            <br>

            <label>Zip Code:</label>
            <input type="string" name="zip_code" value = "<?php echo htmlspecialchars($zip_code)?>"/>
            <br>

            <h3>Package Information:</h3>
            <label>Ship Date:</label>
            <input type = "date" name ="ship_date" value = "<?php echo htmlspecialchars($ship_date)?>"/>
            <br>

            <label>Order Number:</label>
            <input type = "number" name ="order_number" value = "<?php echo htmlspecialchars($order_number)?>"/>
            <br>

            <label>Length:</label>
            <input type = "text" name ="length" value = "<?php echo htmlspecialchars($length)?>"/>
           
            <label>Width:</label>
            <input type = "text" name ="width" value = "<?php echo htmlspecialchars($width)?>"/>
           
            <label>Height:</label>
            <input type = "text" name ="height" value = "<?php echo htmlspecialchars($height)?>"/>
            <br>
           
            <label>Value of package:</label>
            <input type = "text" name ="value" value = "<?php echo htmlspecialchars($value)?>"/>
            <br>
           
            <input id = "submit" type="submit" value = "Submit Shipping Form" />
            
        </form>

        <?php include("footer.php")?>

    <body>

</html>