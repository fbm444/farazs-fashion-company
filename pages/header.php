<?php
if (!isset($_SESSION)) {
    session_start();
}; ?>

<html>
<!-- Faraz Merchant, 2/16/24, IT202 002, Phase 01, fbm@njit.edu -->

<style>

    * {
        background-color: #d8cfc8;
        font-family: "Baskerville", "URW Bookman L", serif;
    }

    header h1 {
        font-size: 300%;
        color: #422616;
        background-color: transparent;
        padding-top: 11;
        padding-bottom: 0;
        margin-left: 5%;
        width: fit-content;
    }

    #logo {
        float: left;
        background-color: white;
        width: 75;
        height: 75;
        margin-left: auto;
        padding-left: 5px;
        padding-top: 30px;
    }


    nav {
        font-size: 125%;
        font-weight: bolder;
        background-color: #422616;
        text-align: center;
        padding-bottom: 1px;
        padding-top: 4px;
        margin-bottom: 0;
    }

    nav a {
        text-decoration: none;
        padding: 10%;
        padding-top: 0;
        padding-bottom: 0;
        background-color: #422616;
    }

    #user {
        background-color: white;
        width: fit-content;
        margin: 3px 2px;
        font-size: 125%;
        border: 2px solid maroon;
        padding: 2px;
        box-shadow: 3px 3px;

    }

    #login {
        background-color: white;
        margin: 0 2px;
        width: fit-content;
        margin-left: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
        border: 2px solid maroon;
        padding: 2px;
        box-shadow: 3px 3px;

    }

    #login a {
        background-color: white;
        font-size: 125%;
        text-decoration: none;
    }

    #login a:hover {
        color: #bf8043;
    }

    #login a:active {
        color: #908a87;
    }

    #login :visited {
        color: maroon;
    }

    nav a:hover {
        color: #bf8043;
    }

    nav a:active {
        color: #908a87;
    }

    nav :visited {
        color: white;
    }

    header {
        background-color: white;
        margin: auto;
        border-top: 3px solid #280f0c;
        border-bottom: 3px solid #280f0c;
        background-image: url("../images/skyline.png");
        background-repeat: no-repeat;
        background-position: 95%;
    }


</style>


<header>

    <img id="logo" src="../images/logo.png" alt="Faraz's Fashion Logo" width=50>
    <h1>Faraz's Fashion & Company, New York City</h1>

    <?php if (isset($_SESSION['is_valid_admin'])) { ?>
        <h4 id="user"> <?php if ($_SESSION['is_valid_admin']) echo "Welcome" . ", " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " ($_SESSION[email])"; ?></h4>        <?php } ?>
    <?php if (isset($_SESSION['is_valid_admin'])) { ?>
        <div id="login"><a href='/pages/logout.php'>Logout</a></div>
    <?php } else { ?>
        <div id="login"><a href='/pages/login.php'>Login</a></div>
    <?php } ?>


    <nav>
        <a href="../index.php">Home</a>

        <?php if ($_SESSION && $_SESSION['is_valid_admin']) { ?>
            <a href="/pages/shipping.php">Shipping</a>
        <?php } ?>

        <?php if ($_SESSION && $_SESSION['is_valid_admin']) { ?>
            <a href='/pages/create.php'>Create</a>
        <?php } ?>

        <a href='/pages/product_page.php'>Products</a>

    </nav>

</header>

</html>