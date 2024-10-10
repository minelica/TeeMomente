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
  <div class="wrapper">
    <div class="content">

      <p class="titelStartseite">Teearten</p>

      <div class="container">
        <img src="img/Produkt1.jpg" alt="Produkt1">
        <p class="beschreibungstext">Dies Ein fein gemahlener, hochwertiger Matcha aus Japan, ideal für Teezeremonien oder als täglicher Energie-Kick. Reich an Antioxidantien. </br> Preis: 19,99 € (100 g)</p>
      </div>

      <div class="container">
        <p class="beschreibungstext">Exklusiver Darjeeling-Tee aus der ersten Ernte, handgepflückt und voller blumiger Aromen. Perfekt für Teeliebhaber. </br> Preis: 14,99 € (100 g)</p>
        <img src="img/Produkt2.jpg" alt="Produkt2">
      </div>

      <div class="container">
        <img src="img/Produkt3.jpg" alt="Produkt3">
        <p class="beschreibungstext">Ein beruhigender Kamillentee, ideal zum Entspannen und Entschleunigen. Natürlicher Genuss aus biologischem Anbau. </br> Preis: 6,99 € (50 g)</p>
      </div>

      <div class="container">
        <p class="beschreibungstext">Eine fruchtige Mischung aus Waldbeeren, ideal für heiße oder kalte Zubereitungen. Fruchtig-süß und erfrischend. </br> Preis: 8,99 € (100 g)</p>
        <img src="img/Produkt4.jpg" alt="Produkt4">
      </div>

      <div class="container">
        <img src="img/Produkt5.jpg" alt="Produkt5">
        <p class="beschreibungstext">Halbfermentierter Tee aus Taiwan mit süßen, fruchtigen Noten. Für Kenner, die nach einem besonderen Tee-Erlebnis suchen. </br> Preis: 12,99 € (100 g)</p>
      </div>

    </div>
    <?php
    include('view/bottom.php');
    ?>
  </div>
</body>

</html>