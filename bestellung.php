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
                <input type="text" id="email" name="email" required>

                <br>

                <label for="produkt">Produkt:</label>
                <select id="produkt" name="produkt" required>
                    <option value="Grüner Tee - Matcha Premium">Grüner Tee - Matcha Premium</option>
                    <option value="Schwarzer Tee - Darjeeling First Flush">Schwarzer Tee - Darjeeling First Flush</option>
                    <option value="Kräutertee - Kamille">Kräutertee - Kamille</option>
                    <option value="Früchtetee - Waldbeeren-Mix">Früchtetee - Waldbeeren-Mix</option>
                    <option value="Oolong Tee - Formosa Oolong">Oolong Tee - Formosa Oolong</option>
                    <option value="Teezubehör - Bambus-Teesieb">Teezubehör - Bambus-Teesieb</option>
                    <option value="Teezubehör - Matcha-Besen (Chasen)">Teezubehör - Matcha-Besen (Chasen)</option>
                    <option value="Teezubehör - Teekanne aus Gusseisen">Teezubehör - Teekanne aus Gusseisen</option>
                    <option value="Teezubehör - Doppelwandige Teegläser (2er Set)">Teezubehör - Doppelwandige Teegläser (2er Set)</option>
                    <option value="Eistee-Sirup - Zitrone-Minz">Eistee-Sirup - Zitrone-Minz</option>
                    <option value="Bio-Honig - Lavendel">Bio-Honig - Lavendel</option>
                    <option value="Teedosen-Set (3er Set)">Teedosen-Set (3er Set)</option>
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