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
    <p class="beschreibungstext">Dies ist ein Beispieltext, der rechts neben dem Bild angezeigt wird. </p>
  </div>

  <div class="container">
    <p class="beschreibungstext">Dies ist ein Beispieltext, der links neben dem Bild angezeigt wird. </p>
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