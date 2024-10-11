<?php
include('view/top.php');
include('view/menue.php');
?>

<?php

$produkte = [
    [
        "name" => "Grüner Tee - Matcha Premium",
        "beschreibung" => "Ein fein gemahlener, japanischer grüner Tee, reich an Antioxidantien.",
        "preis" => 19.99,
        "verpackung" => "Metallische Teedose"
    ],
    [
        "name" => "Schwarzer Tee - Darjeeling First Flush",
        "beschreibung" => "Ein luxuriöser schwarzer Tee aus den Darjeeling-Gärten.",
        "preis" => 14.99,
        "verpackung" => "Vakuumverpackt in umweltfreundlicher Verpackung"
    ],
    [
        "name" => "Kräutertee - Kamille",
        "beschreibung" => "Beruhigender Kamillentee, ideal zum Entspannen und Schlafen.",
        "preis" => 6.99,
        "verpackung" => "Papiertüten"
    ],
    [
        "name" => "Früchtetee - Waldbeeren-Mix",
        "beschreibung" => "Eine fruchtige Mischung aus Himbeeren, Brombeeren und Holunder.",
        "preis" => 8.99,
        "verpackung" => "Transparente, wiederverwendbare Verpackung"
    ],
    [
        "name" => "Oolong Tee - Formosa Oolong",
        "beschreibung" => "Ein traditioneller halbfermentierter Tee aus Taiwan mit einem süßen und fruchtigen Aroma.",
        "preis" => 12.99,
        "verpackung" => "Luftdicht in Vakuumbeuteln"
    ],
    [
        "name" => "Teezubehör - Bambus-Teesieb",
        "beschreibung" => "Handgefertigtes Bambus-Teesieb, ideal für losen Tee.",
        "preis" => 4.99,
        "verpackung" => "In einem Baumwollsäckchen"
    ],
    [
        "name" => "Teezubehör - Matcha-Besen (Chasen)",
        "beschreibung" => "Traditioneller japanischer Matcha-Besen aus Bambus.",
        "preis" => 12.99,
        "verpackung" => "Schlichte, japanische Verpackung"
    ],
    [
        "name" => "Teezubehör - Teekanne aus Gusseisen",
        "beschreibung" => "Robuste und stilvolle Gusseisen-Teekanne mit Sieb.",
        "preis" => 39.99,
        "verpackung" => "In einer eleganten Geschenkbox"
    ],
    [
        "name" => "Teezubehör - Doppelwandige Teegläser (2er Set)",
        "beschreibung" => "Stilvolle, doppelwandige Gläser, die den Tee lange warm halten.",
        "preis" => 14.99,
        "verpackung" => "In einem schlichten Karton"
    ],
    [
        "name" => "Eistee-Sirup - Zitrone-Minz",
        "beschreibung" => "Erfrischender Sirup für Eistee mit Zitronen- und Minzgeschmack.",
        "preis" => 7.99,
        "verpackung" => "Glasflasche mit Schraubverschluss"
    ],
    [
        "name" => "Bio-Honig - Lavendel",
        "beschreibung" => "Aromatischer Lavendelhonig, perfekt zum Süßen von Tee.",
        "preis" => 9.99,
        "verpackung" => "Glas"
    ],
    [
        "name" => "Teedosen-Set (3er Set)",
        "beschreibung" => "Stilvolle Teedosen aus Metall mit verschiedenen Designs.",
        "preis" => 15.99,
        "verpackung" => "In einer Geschenkbox"
    ],
];

// Funktion zur Produktsuche (nicht case-sensitiv)
function sucheProdukt($produkte, $suchbegriff)
{
    $ergebnisse = [];
    foreach ($produkte as $produkt) {
        if (stripos($produkt['name'], $suchbegriff) !== false || stripos($produkt['beschreibung'], $suchbegriff) !== false) {
            $ergebnisse[] = $produkt;
        }
    }
    return $ergebnisse;
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeeMomente</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="content">
            <p class="titelStartseite">Unsere Produkte im Überblick</p>

            </br>

            <!-- Tabelle -->
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Beschreibung</th>
                    <th>Preis</th>
                    <th>Verpackung</th>
                </tr>
                <tr>
                    <?php foreach ($produkte as $produkt) : ?>
                        <td><?= $produkt['name'] ?></td>
                        <td><?= $produkt['beschreibung'] ?></td>
                        <td><?= $produkt['preis'] ?> €</td>
                        <td><?= $produkt['verpackung'] ?></td>
                </tr>
            <?php endforeach; ?>
            </table>

            </br></br></br>
<div class="carousel">
            <!-- Carousel -->
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 6 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt6.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 7 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt7.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 8 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt8.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 9 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt9.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 10 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt10.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 11 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt11.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 12 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="img/Produkt12.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            </div>
        </div>
        <?php
        include('view/bottom.php');
        ?>
    </div>
</body>

</html>