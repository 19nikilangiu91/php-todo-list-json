<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Controll-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

// Dichiaro il parametro che deve andare a prendere.
$newTodo = $_GET['newTodo'];

$jsonTodolist = file_get_contents('todo.json', true);

// Decodifichiamo il file "$jsonTodolist".
$todoList = json_decode($jsonTodolist);


// Aggiungiamo un elemento all'interno di "$todoList", dichiarando la variabile "newTodo".
$todoList[] = [
    "text" => $newTodo,
    "completed" => false
];

// Ricodifichiamo il nostro "$jsonTodolist".
$jsonTodolist = json_encode($todoList);

// e lo inseriamo all'interno del file 'todo.json'.
file_put_contents('todo.json', $jsonTodolist);