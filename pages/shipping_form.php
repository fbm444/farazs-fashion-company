<?php
// Faraz Merchant, 2/16/24, IT202 002, Phase 01, fbm@njit.edu 

$error_message = "";

$first_name = filter_input(INPUT_POST, "first_name");
$last_name = filter_input(INPUT_POST, "last_name");
$street_address = filter_input(INPUT_POST, "street_address");
$city = filter_input(INPUT_POST, "city");
$state = filter_input(INPUT_POST, "state");
$zip_code = filter_input(INPUT_POST, "zip_code");
$ship_date = filter_input(INPUT_POST, "ship_date");
$order_number = filter_input(INPUT_POST, "order_number", FILTER_VALIDATE_INT);
$height = filter_input(INPUT_POST, "height", FILTER_VALIDATE_FLOAT);
$length = filter_input(INPUT_POST, "length", FILTER_VALIDATE_FLOAT);
$width = filter_input(INPUT_POST, "width", FILTER_VALIDATE_FLOAT);
$value = filter_input(INPUT_POST, "value", FILTER_VALIDATE_FLOAT);


$states = array("ALABAMA", "ALASKA", "ARIZONA", "ARKANSAS", "CALIFORNIA",
    "COLORADO", "CONNECTICUT", "DELAWARE", "DISTRICT OF COLUMBIA",
    "FLORIDA", "GEORGIA", "HAWAII", "IDAHO", "ILLINOIS", "INDIANA",
    "IOWA", "KANDAS", "KENTUCKY", "LOUISIANA", "MAINE", "MARYLAND",
    "MASSACHUSETTS", "MICHIGAN", "MINNESOTA", "MISSISSIPPI", "MISSOURI",
    "MONTANA", "NEBRASKA", "NEVADA", "NEW HAMPSHIRE", "NEW JERSEY",
    "NEW MEXICO", "NEW YORK", "NORTH CAROLINA", "NORTH DAKOTA", "OHIO",
    "OKLAHOMA", "OREGON", "PENNSYLVANIA", "RHODE ISLAND", "SOUTH CAROLINA",
    "SOUTH DAKOTA", "TENNESEE", "TEXAS", "UTAH", "VERMONT", "VIRGINIA",
    "WASHINGTON", "WEST VIRGINIA", "WISCONSIN", "WYOMING", "AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "DC", "FL",
    "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME",
    "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH",
    "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI",
    "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY");


if (empty($first_name) || empty($last_name) || empty($street_address) ||
    empty($city) || empty($state) || empty($zip_code) ||
    empty($ship_date) || empty($order_number) || empty($height) ||
    empty($length) || empty($width) || empty($value)) {
    $error_message .= "Please complete all required fields. <br>";
}

if ($value === FALSE) {
    $error_message .= "Please enter a valid package value. <br>";
} elseif ($value > 1000) {
    $error_message .= "The value of the package cannot exceed $1000. <br>";
}

if ($height === FALSE || $width === FALSE || $length === FALSE) {
    $error_message .= "Please enter valid dimensions <br>";
} elseif ($height > 36 || $width > 36 || $length > 36) {
    $error_message .= "None of the dimensions can exceed 36 inches. <br>";
}

if (!is_numeric($zip_code) || strlen($zip_code) != 5) {
    $error_message .= "Please enter a valid zip code <br>";
}

if ($state === FALSE) {
    $error_message .= "Please enter a valid state <br>";
} elseif (!in_array(strtoupper($state), $states)) {
    $error_message .= "Please enter a valid state <br>";
}


if ($error_message != "") {
    include("shipping.php");
    exit();
}

?>

<html>

<head>

    <title>Faraz's Fashion | Shipping Label</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/label.css">

</head>


<body>

<?php include("header.php") ?>

<h1 class="label">Shipping Label</h1>

<main>

    <div id="from">

        Faraz's Fashion
        <br>
        4444 Fashion Boulevard
        <br>
        New York, New York 10018

    </div>

    <div id="details">

        Dimensions: <?php echo htmlspecialchars($length) . " x " . htmlspecialchars($width) . " x " . htmlspecialchars($height) ?>
        <br>
        Value: <?php echo "$" . htmlspecialchars($value) ?>
        <br>
        Ship Date: <?php echo htmlspecialchars($ship_date); ?>

    </div>


    <div id="to">

        <h2>Ship To:</h2>
        <h3> &nbsp; <?php echo htmlspecialchars($first_name) . " " . htmlspecialchars($last_name); ?>
            <br>
            &nbsp; <?php echo htmlspecialchars($street_address) ?>
            <br>
            &nbsp; <?php echo htmlspecialchars($city) ?>
            <br>
            &nbsp; <?php echo htmlspecialchars($state) . ", " . htmlspecialchars($zip_code) ?>
        </h3>

    </div>

    <img class="barcode" src="../images/barcode.png" alt="label barcode">

    <div id="UPS">

        <h1>UPS NEXT DAY AIR</h1>
        <h3>Tracking Number: US9524901185421
            <br>
            Order Number: 123-456-789
        </h3>

    </div>

    <img class="barcode" src="../images/barcode2.png" alt="label barcode">

</main>


<?php include("footer.php") ?>

</body>

</html>