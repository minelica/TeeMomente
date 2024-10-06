<?php
include('view/top.php');
include('view/menue.php');
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TeeMomente</title>
  <link rel="stylesheet" href="css/app.css">
</head>

<body>

  <p class="titelStartseite">Sonstiges</p>

  <div class="container">
    <img src="img/Produkt10.jpg" alt="Produkt10">
    <p class="beschreibungstext">Frischer Zitrone-Minz-Sirup für erfrischende Eistee-Kreationen. Natürlich und ohne künstliche Zusätze. </br> Preis: 7,99 € (500 ml)</p>
  </div>

  <div class="container">
    <p class="beschreibungstext">Aromatischer Bio-Lavendelhonig, ideal zum Süßen von Tee oder als Aufstrich. Regional und nachhaltig produziert. </br> Preis: 9,99 € (250 g)</p>
    <img src="img/Produkt11.jpg" alt="Produkt11">
  </div>

</body>

</html>

<?php
include('view/bottom.php');
?>

<style>
  .container {
    display: flex;
    align-items: center;
  }

  .container img {
    width: 300px;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    border-radius: 8px;
  }

  .container p {
    font-size: 18px;
  }
</style>