<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div class="container">
            <div class="header_align">
                <img class="logo" src="img/logoGimp.png" alt="Stock Image">
                <h2 class="titel">The simple page</h2>
                <!-- Doormiddel van php het bestand nav.php invoegen om de nav in de header samen te voegen -->
                <?php
                include("nav.php");
                ?>
            </div>
        </div>
    </header>
</body>

</html>