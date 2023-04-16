<?php
include __DIR__.'/db.json';

$mov= file_get_contents(__DIR__.'/db.json');
$mov= json_decode($mov, true);
header('Content-Type: application/json');