<?php
$path = '/Users/joeriabbo/Sites/marvel-quotes';
$quotes = file_get_contents($path . '/quotes.json');
$quotes = json_decode($quotes, true);
shuffle($quotes);
header('Content-Type: application/json');

echo json_encode($quotes[key($quotes)]);