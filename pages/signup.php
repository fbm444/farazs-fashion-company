<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu
session_start();


if ($_SESSION && $_SESSION['is_valid_admin']) {
    include('index.php');
    exit();
}

include('header.php');


?>

<html>
<head>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/signup.css">
    <title>Faraz's Fashion | Login</title>
</head>
<body>


<main>
    <form action="createUser.php" method="post">

        <h1>Sign up For Faraz's Fashion</h1>

        <?php if (isset($signup_message)) { ?>
            <p id="signup_message"><?php echo $signup_message; ?></p>
        <?php } ?>

        <label id="firstName">First Name</label>
        <br>
        <input type="text" name="firstName">

        <label id="lastName">Last Name</label>
        <br>
        <input type="text" name="lastName">

        <label id="email">Enter an Email</label>
        <br>
        <input type="text" name="email">

        <br>
        <label id="password">Enter a Password</label>
        <br>
        <input type="password" name="password">
        <br>

        <input id="submit" type="submit" value="Sign Up!">
    </form>

</main>

<?php include('footer.php'); ?>
</body>

</html>


