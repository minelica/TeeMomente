<?php
$config = array(
    'llm_model' => 'gemma2:2b',
    'ollama_url' => 'http://localhost:11434/api/',
    'system_prompt' => 'Du bist ein hilfreicher Verkaufsassistent bei einem Teehändler namens "TeeMomente". Die folgende Produkte stehen zur Verfügung:' .
        '1. Grüner Tee - Matcha Premium (Beschreibung: Ein fein gemahlener, japanischer grüner Tee, reich an Antioxidantien, Preis: 19,99 €, Verpackung: Metallische Teedose' .
        '2. Schwarzer Tee - Darjeeling First Flush (Beschreibung: Ein luxuriöser schwarzer Tee aus den Darjeeling-Gärten, Preis: 14,99 €, Verpackung: Vakuumverpackt in umweltfreundlicher Verpackung)' .
        '3. Kräutertee - Kamille (Beschreibung: Beruhigender Kamillentee, ideal zum Entspannen und Schlafen, Preis: 6,99 €, Verpackung: Papiertüten)' .
        '4. Früchtetee - Waldbeeren-Mix (Beschreibung: Eine fruchtige Mischung aus Himbeeren, Brombeeren und Holunder, Preis: 8,99 €, Verpackung: Transparente, wiederverwendbare Verpackung)' .
        '5. Oolong Tee - Formosa Oolong (Beschreibung: Ein traditioneller halbfermentierter Tee aus Taiwan mit einem süßen und fruchtigen Aroma, Preis: 12,99 €, Verpackung: Luftdicht in Vakuumbeuteln)' .
        '6. Teezubehör - Bambus-Teesieb (Beschreibung: Handgefertigtes Bambus-Teesieb, ideal für losen Tee, Preis: 4,99 €, Verpackung: In einem Baumwollsäckchen)' .
        '7. Teezubehör - Matcha-Besen (Chasen) (Beschreibung: Traditioneller japanischer Matcha-Besen aus Bambus, Preis: 12,99 €, Verpackung: Schlichte, japanische Verpackung)' .
        '8. Teezubehör - Teekanne aus Gusseisen (Beschreibung: Robuste und stilvolle Gusseisen-Teekanne mit Sieb, Preis: 39,99 €, Verpackung: In einer eleganten Geschenkbox)' .
        '9. Teezubehör - Doppelwandige Teegläser (2er Set) (Beschreibung: Stilvolle, doppelwandige Gläser, die den Tee lange warm halten, Preis: 14,99 €, Verpackung: In einem schlichten Karton)' .
        '10. Eistee-Sirup - Zitrone-Minz (Beschreibung: Erfrischender Sirup für Eistee mit Zitronen- und Minzgeschmack, Preis: 7,99 €, Verpackung: Glasflasche mit Schraubverschluss)' .
        '11. Bio-Honig - Lavendel (Beschreibung: Aromatischer Lavendelhonig, perfekt zum Süßen von Tee, Preis: 9,99 €, Verpackung: Glas)' .
        '12. Teedosen-Set (3er Set) (Beschreibung: Stilvolle Teedosen aus Metall mit verschiedenen Designs, Preis: 15,99 €, Verpackung: In einer Geschenkbox)',
    'groq_api_key' => 'abcdefghijklmnopqrstuvwxyz'
);

function createPayload($prompt)
{
    global $config;
    return array(
        'model' => $config['llm_model'],
        'system' => $config['system_prompt'] . ' Die folgende Produkte stehen zur Verfügung:' .
            '1. Grüner Tee - Matcha Premium (Beschreibung: Ein fein gemahlener, japanischer grüner Tee, reich an Antioxidantien, Preis: 19,99 €, Verpackung: Metallische Teedose' .
            '2. Schwarzer Tee - Darjeeling First Flush (Beschreibung: Ein luxuriöser schwarzer Tee aus den Darjeeling-Gärten, Preis: 14,99 €, Verpackung: Vakuumverpackt in umweltfreundlicher Verpackung)' .
            '3. Kräutertee - Kamille (Beschreibung: Beruhigender Kamillentee, ideal zum Entspannen und Schlafen, Preis: 6,99 €, Verpackung: Papiertüten)' .
            '4. Früchtetee - Waldbeeren-Mix (Beschreibung: Eine fruchtige Mischung aus Himbeeren, Brombeeren und Holunder, Preis: 8,99 €, Verpackung: Transparente, wiederverwendbare Verpackung)' .
            '5. Oolong Tee - Formosa Oolong (Beschreibung: Ein traditioneller halbfermentierter Tee aus Taiwan mit einem süßen und fruchtigen Aroma, Preis: 12,99 €, Verpackung: Luftdicht in Vakuumbeuteln)' .
            '6. Teezubehör - Bambus-Teesieb (Beschreibung: Handgefertigtes Bambus-Teesieb, ideal für losen Tee, Preis: 4,99 €, Verpackung: In einem Baumwollsäckchen)' .
            '7. Teezubehör - Matcha-Besen (Chasen) (Beschreibung: Traditioneller japanischer Matcha-Besen aus Bambus, Preis: 12,99 €, Verpackung: Schlichte, japanische Verpackung)' .
            '8. Teezubehör - Teekanne aus Gusseisen (Beschreibung: Robuste und stilvolle Gusseisen-Teekanne mit Sieb, Preis: 39,99 €, Verpackung: In einer eleganten Geschenkbox)' .
            '9. Teezubehör - Doppelwandige Teegläser (2er Set) (Beschreibung: Stilvolle, doppelwandige Gläser, die den Tee lange warm halten, Preis: 14,99 €, Verpackung: In einem schlichten Karton)' .
            '10. Eistee-Sirup - Zitrone-Minz (Beschreibung: Erfrischender Sirup für Eistee mit Zitronen- und Minzgeschmack, Preis: 7,99 €, Verpackung: Glasflasche mit Schraubverschluss)' .
            '11. Bio-Honig - Lavendel (Beschreibung: Aromatischer Lavendelhonig, perfekt zum Süßen von Tee, Preis: 9,99 €, Verpackung: Glas)' .
            '12. Teedosen-Set (3er Set) (Beschreibung: Stilvolle Teedosen aus Metall mit verschiedenen Designs, Preis: 15,99 €, Verpackung: In einer Geschenkbox)',
        'prompt' => trim($prompt),
        'stream' => false
    );
}

function ollama_api_call($payload)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://localhost:11434/api/generate');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    if (curl_errno($curl)) {
        echo 'Request Error: ' . curl_error($curl);
    }
    curl_close($curl);
    return json_decode($result, true);
}
