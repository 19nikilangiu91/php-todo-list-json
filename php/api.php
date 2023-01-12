<?php
$testObj = ["Hello world"];

header('Content-Type: application/json');

echo json_encode($testObj);