<?php

// Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.

// Aggiungo queste due righe nel php per evitare l'errore di CORS Policy!.
//---------------------------------- Inserisco l'url della parte "front-end".
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Controll-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

// $value = $_GET['third'];

$testObj = [
    [
        "first" => "Hello world",
        "second" => "Hello to everyone",
        // "third" => $value
    ]
];

echo json_encode($testObj);