<?php

// 1) Definisco il file "todolist.php" che mi sarà utile alla generazione del file "todo.json".

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

// 2) Dichiaro la variabile "$jsonTodolist" richiamando la funzione "json_encode" che mi codifica il tipo di dato in formato json.
$jsonTodolist = json_encode($todoList);

// 3) Lo inseriamo all'interno del file 'todo.json'.
file_put_contents('todo.json', $jsonTodolist);