<?php

?>

<html>
<!-- Faraz Merchant, 2/16/24, IT202 002, Phase 01, fbm@njit.edu -->

<head>
    <title>Faraz's Fashion | Home</title>
    <link rel="icon" href="/images/logo.png">

</head>

<body>

<?php include("pages/header.php"); ?>

<link rel="stylesheet" href="/styling/index.css">


<?php if (isset($welcome)){ ?>
<h4 id="welcome"> <?php echo $welcome; ?>
    <h4>
        <?php } ?>

        <h2>Welcome to Faraz's Fashion: <br> The Premire Destination for all Your Fashion Needs!</h2>

        <main>

            <h3>About the Company</h3>


            <p>
                Faraz's fashion was founded on Feburary 1st, 2024 with the goal of increasing
                visibility and inclusion in the fashion industry. We started from a small apartment in
                New York City and have since expanded greatly. We strive to create and provide truly unique
                pieces for our customers. <br> <br> We sell everything, ranging from small accessories and statement
                pieces,
                to leather jackets and footwear. We truly believe our pieces are one of a kind, and you will certainly
                not find another brand with a commitment to quality and service like us. <br><br>
                Come take a look and see what we have in store for you!
            </p>

            <h3 id="end">So what are you waiting for...? <br> <br> Order from us today!</h3>


            <div id="images">

                <figure id="collage">

                    <img src="/images/collage.jpg" alt="Shoes" width=40%>

                    <figcaption>Our Catalog</figcaption>
                </figure>

                <figure id="accessories">
                    <img src="/images/accessories.webp" alt="Accessories" width=30%>
                    <figcaption>Our Vision</figcaption>
                </figure>


                <figure id="models">
                    <img src="/images/models.jpeg" alt="Models" width=30%>
                    <figcaption>Our Models</figcaption>
                </figure>

                <figure id="bags">
                    <img src="/images/bags.jpeg" alt="Bags" width=40%>
                    <figcaption>Our Bags</figcaption>
                </figure>

            </div>

        </main>

        <?php include("pages/footer.php") ?>

        <body>

</html>