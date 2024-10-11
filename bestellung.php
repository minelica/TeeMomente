<!DOCTYPE html>
<html lang="de">

<?php
include('view/top.php');
include('view/menue.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>TeeMomente</title>
    <link rel="stylesheet" href="css/formate.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <h1 class="titelStartseite">Bestellung</h1>
            <p class="beschreibungstext">Hier können Sie Ihre Bestellung aufgeben. Bitte füllen Sie das folgende Formular aus:</p>

            <form class="bestell_form" action="send.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required>

                <label for="email">E-Mail-Adresse:</label>
                <input type="email" id="email" name="email" required>

                <br>

                <label for="produkt">Produkt:</label>
                <select id="produkt" name="produkt" required>
                    <option value="gruener_tee">Grüner Tee - Matcha Premium</option>
                    <option value="schwarzer_tee">Schwarzer Tee - Darjeeling First Flush</option>
                    <option value="kraeutertee">Kräutertee - Kamille</option>
                    <option value="fruechtetee">Früchtetee - Waldbeeren-Mix</option>
                    <option value="oolong_tee">Oolong Tee - Formosa Oolong</option>
                    <option value="bambus_teesieb">Teezubehör - Bambus-Teesieb</option>
                    <option value="matcha_besen">Teezubehör - Matcha-Besen (Chasen)</option>
                    <option value="teekanne">Teezubehör - Teekanne aus Gusseisen</option>
                    <option value="teeglaeser">Teezubehör - Doppelwandige Teegläser (2er Set)</option>
                    <option value="eistee_sirup">Eistee-Sirup - Zitrone-Minz</option>
                    <option value="bio_honig">Bio-Honig - Lavendel</option>
                    <option value="teedosen_set">Teedosen-Set (3er Set)</option>
                </select>

                <label for="menge">Menge:</label>
                <input type="number" id="menge" name="menge" min="1" required>

                <input type="submit" name="Bestellen" value="Bestellen">
            </form>
        </div>
        <?php
        include('view/bottom.php');
        ?>
    </div>
</body>

</html>



<style>
    form {
        width: 50%;
        margin: auto;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%
    }
</style>