<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>secondLink</title>
</head>

<body>
    <!-- Doormiddel van php het bestand header.php invoegen om de header te tonen -->
    <?php
    include("header.php");
    ?>
    <!-- De pagina inrichten -->
    <div class="container">
        <div class="page_height">
            <section class="white_block">
                <div class="tekst_titel">
                    <h2>
                        <!-- Ruimte voor een koptekst -->
                    </h2>
                </div>
                <div class="tekst_container">
                    <div class="image_container">
                        <img src="img/imageGimp.png" alt="Stock Image">
                    </div>
                    <div class="tekst">
                        <p>
                            <!-- Ruimte voor een tekst -->
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Doormiddel van php het bestand footer.php invoegen om de footer te tonen -->
    <?php
    include("footer.php");
    ?>
</body>

</html>