<?php

$todoList = [
    [
        "text" => "HTML",
        "completed" => true
    ],
    [
        "text" => "CSS",
        "completed" => true
    ],
    [
        "text" => "Responsive Design",
        "completed" => true
    ],
    [
        "text" => "Javascript",
        "completed" => true
    ],
    [
        "text" => "PHP",
        "completed" => true
    ],

    [
        "text" => "Laravel",
        "completed" => false
    ],
];

// Dichiaro la variabile "$jsonTodolist" richiamando la funzione "json_encode" che mi codifica il tipo di dato in formato json.
$jsonTodolist = json_encode($todoList);

// lo inseriamo all'interno del file 'todo.json'.
file_put_contents('todo.json', $jsonTodolist);

// Dichiaro la variabile "$jsonTodolist" richiamando la funzione "file_get_contents" che mi rilegge il contenuto di un file e ce lo restituisce come stringa.
$jsonTodolist = file_get_contents('todo.json', true);

// Decodifichiamo il file "$jsonTodolist".
$todoList = json_decode($jsonTodolist);


// Aggiungiamo un elemento all'interno di "$todoList".
$todoList[] = [

    "text" => "Ciao",
    "completed" => false
];

// Ricodifichiamo il nostro "$jsonTodolist".
$jsonTodolist = json_encode($todoList);

// e lo inseriamo all'interno del file 'todo.json'.
file_put_contents('todo.json', $jsonTodolist);


$jsonTodolist = file_get_contents('todo.json', true);
$todoList = json_decode($jsonTodolist);
var_dump($todoList);