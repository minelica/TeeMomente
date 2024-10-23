<?php
$config = array(
    'llm_model' => 'gemma2:2b',
    'ollama_url' => 'http://localhost:11434/api/',
    'system_prompt' => 'Du bist ein hilfreicher Verkaufsassistent bei einem Teehändler namens "TeeMomente"',
    'groq_api_key' => 'abcdefghijklmnopqrstuvwxyz',
    'products' => array(
        'gruener_tee' => array(
            'name' => 'Grüner Tee - Matcha Premium',
            'description' => 'Ein fein gemahlener, japanischer grüner Tee, reich an Antioxidantien',
            'price' => '19,99 €',
            'packaging' => 'Metallische Teedose',
            'image' => 'img/Produkt1.jpg'
        ),
        'schwarzer_tee' => array(
            'name' => 'Schwarzer Tee - Darjeeling First Flush',
            'description' => 'Ein luxuriöser schwarzer Tee aus den Darjeeling-Gärten',
            'price' => '14,99 €',
            'packaging' => 'Vakuumverpackt in umweltfreundlicher Verpackung',
            'image' => 'img/Produkt2.jpg'
        ),
        'kraeutertee' => array(
            'name' => 'Kräutertee - Kamille',
            'description' => 'Beruhigender Kamillentee, ideal zum Entspannen und Schlafen',
            'price' => '6,99 €',
            'packaging' => 'Papiertüten',
            'image' => 'img/Produkt3.jpg'
        ),
        'fruechtetee' => array(
            'name' => 'Früchtetee - Waldbeeren-Mix',
            'description' => 'Ein fruchtiger Tee aus einer Mischung von Waldbeeren',
            'price' => '8,99 €',
            'packaging' => 'Papiertüten',
            'image' => 'img/Produkt4.jpg'
        ),
        'oolong_tee' => array(
            'name' => 'Oolong Tee - Formosa Oolong',
            'description' => 'Ein halbfermentierter Tee mit einem blumigen Aroma',
            'price' => '12,99 €',
            'packaging' => 'Metallische Teedose',
            'image' => 'img/Produkt5.jpg'
        ),
        'bambus_teesieb' => array(
            'name' => 'Teezubehör - Bambus-Teesieb',
            'description' => 'Ein handgefertigtes Teesieb aus Bambus',
            'price' => '4,99 €',
            'packaging' => 'Kartonverpackung',
            'image' => 'img/Produkt6.jpg'
        ),
        'matcha_besen' => array(
            'name' => 'Teezubehör - Matcha-Besen (Chasen)',
            'description' => 'Ein traditioneller Bambusbesen zum Zubereiten von Matcha-Tee',
            'price' => '12,99 €',
            'packaging' => 'Kartonverpackung',
            'image' => 'img/Produkt7.jpg'
        ),
        'teekanne' => array(
            'name' => 'Teezubehör - Teekanne aus Gusseisen',
            'description' => 'Eine hochwertige Teekanne aus Gusseisen mit Teesieb',
            'price' => '39,99 €',
            'packaging' => 'Kartonverpackung',
            'image' => 'img/Produkt8.jpg'
        ),
        'teeglaeser' => array(
            'name' => 'Teezubehör - Doppelwandige Teegläser (2er Set)',
            'description' => 'Zwei doppelwandige Teegläser aus hitzebeständigem Borosilikatglas',
            'price' => '14,99 €',
            'packaging' => 'Kartonverpackung',
            'image' => 'img/Produkt9.jpg'
        ),
        'eistee_sirup' => array(
            'name' => 'Eistee-Sirup - Zitrone-Minz',
            'description' => 'Ein erfrischender Sirup zum Zubereiten von hausgemachtem Eistee',
            'price' => '7,99 €',
            'packaging' => 'Glasflasche',
            'image' => 'img/Produkt10.jpg'
        ),
        'bio_honig' => array(
            'name' => 'Bio-Honig - Lavendel',
            'description' => 'Ein hochwertiger Bio-Honig mit Lavendelaroma',
            'price' => '9,99 €',
            'packaging' => 'Glasflasche',
            'image' => 'img/Produkt11.jpg'
        ),
        'teedosen_set' => array(
            'name' => 'Teedosen-Set (3er Set)',
            'description' => 'Ein Set aus drei Teedosen in verschiedenen Größen',
            'price' => '15,99 €',
            'packaging' => 'Kartonverpackung',
            'image' => 'img/Produkt12.jpg'
        )
    )
);
?>