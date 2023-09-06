<?php
include_once 'vendor/autoload.php'; 

function writeToGoogleSheets($firstName, $lastName, $email) {
    // Load credentials from service account
    $client = new Google_Client();
    $client->setAuthConfig('/Users/emil07/Downloads/club01-1d0a068f2858.json');

    $client->addScope(Google_Service_Sheets::SPREADSHEETS);

    $service = new Google_Service_Sheets($client);

    $spreadsheetId = '1iQrymPir8nk9zvdYYVUrlGkqCTTaLFw2DTVa3OQBA7U'; 
    $range = 'Sheet1'; // Assuming you want to write to the first sheet

    $values = [
        [$firstName, $lastName, $email]  // Row data
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    // Append the new row of data
    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    return $result->getUpdates()->getUpdatedCells(); 
}

?>
