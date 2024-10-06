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

  <p class="titelStartseite">Teezubehör</p>

  <div class="container">
    <img src="img/Produkt6.jpg" alt="Produkt6">
    <p class="beschreibungstext">Nachhaltiges, handgefertigtes Teesieb aus Bambus, perfekt für losen Tee. Umweltfreundlich und langlebig. </br> Preis: 4,99 €</p>
  </div>

  <div class="container">
    <p class="beschreibungstext">Traditioneller Bambusbesen zur Zubereitung von Matcha-Tee. Sorgt für eine authentische Teezeremonie. </br> Preis: 12,99 €</p>
    <img src="img/Produkt7.jpg" alt="Produkt7">
  </div>

  <div class="container">
    <img src="img/Produkt8.jpg" alt="Produkt8">
    <p class="beschreibungstext">Elegante Gusseisen-Teekanne, die den Tee lange warm hält. Perfekt für eine stilvolle Teezeremonie. </br> Preis: 39,99 € (1,2 L)</p>
  </div>

  <div class="container">
    <p class="beschreibungstext">Stilvolle, doppelwandige Gläser, die den Tee warm und die Außenseite kühl halten. Ideal für den täglichen Genuss. </br> Preis: 14,99 € (2 Gläser)</p>
    <img src="img/Produkt9.jpg" alt="Produkt9">
  </div>

  <div class="container">
    <img src="img/Produkt12.jpg" alt="Produkt12">
    <p class="beschreibungstext">Stilvolle, luftdichte Teedosen zur Aufbewahrung von losem Tee. Im Set mit drei unterschiedlichen Designs. </br> Preis: 15,99 € (Set aus 3 Dosen)</p>
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