<?php

// Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.

// Aggiungo queste due righe nel php per evitare l'errore di CORS Policy!.
//---------------------------------- Inserisco l'url della parte "front-end".
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Controll-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$jsonTodolist = file_get_contents('todo.json', true);
$todoList = json_decode($jsonTodolist);

echo json_encode($todoList);