<?php

// 6) al click l' "api-inserisci-todo-php" rileggerà il file "todo.json", lo converte in Php, aggiunge il nuovo task "$todoList" definito dall'utente, lo riconverte in "json" e lo salva nel file "todo.json".

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Controll-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

// Dichiaro il parametro che deve andare a prendere.
$text = $_GET['text'];

$jsonTodolist = file_get_contents('todo.json');

// Decodifichiamo il file "$jsonTodolist".
$todoList = json_decode($jsonTodolist);


// Aggiungiamo un elemento all'interno di "$todoList", dichiarando la variabile "newTodo".
$todoList[] = [
    "text" => $text,
    "completed" => false
];

// Ricodifichiamo il nostro "$jsonTodolist".
$jsonTodolist = json_encode($todoList);

// e lo inseriamo all'interno del file 'todo.json'.
file_put_contents('todo.json', $jsonTodolist);