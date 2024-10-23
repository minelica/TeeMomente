<?php
/**
 * Diese Funktion erstellt ein Playroad-Array für den API-Aufruf
 * 
 * @param string $prompt Der Text, der an das Modell übergeben wird
 * @return array Das Payload-Array für den API-Aufruf
 */
function createPayload($prompt)
{
    global $config;
    return array(
        'model' => $config['llm_model'], // Das Modell
        'system' => $config['system_prompt'], // Der System-prompt
        'prompt' => trim($prompt), // Der Benutzer-prompt
        'stream' => false, // Gibt an, ob das Streaming aktiviert ist
    );
}

/**
 * Diese Funktion führt den API-Aufruf durch und gibt die Antwort zurück.
 * 
 * @param array $playroad Das Payload-Array für den API-Aufruf
 * @return array Die Antwort der API als Array
 */
function ollama_api_call($payload)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://localhost:11434/api/generate'); // Die URL der API
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload)); // Das Payload-Array als JSON
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); // Der Header für JSON-Daten
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Gibt die Antwort als String zurück
    $response = curl_exec($curl); // Führt den API-Aufruf durch
    curl_close($curl); // Schließt die cURL-Verbindung
    return json_decode($response, true); // Gibt die Antwort als Array zurück
}
?>