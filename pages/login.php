<?php
// Faraz Merchant, 4/5/24, IT202 002, Phase 04, fbm@njit.edu
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($login_message)) {
    $login_message = 'Welcome to Faraz\'s Fashion. Please log in!';
}

if ($_SESSION && $_SESSION['is_valid_admin']) {
    include('index.php');
    exit();
}

include('header.php');


?>

<html>
<head>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styling/login.css">
    <title>Faraz's Fashion | Login</title>
</head>
<body>


<main>
    <form action="authenticate.php" method="post">

        <h1>Login to Faraz's Fashion</h1>
        <p id="login_message"><?php echo $login_message; ?></p>


        <label id="email">Email</label>
        <br>
        <input type="text" name="email">

        <br>
        <label id="password">Password</label>
        <br>
        <input type="password" name="password">
        <br>

        <input id="submit" type="submit" value="Login!">
        <a href='/pages/signup.php' style="background-color: #CBA991"><input id="signup" type="button"
                                                                             value="Not a User? Sign Up!"></a>
    </form>


</main>

<?php include('footer.php'); ?>
</body>

</html>