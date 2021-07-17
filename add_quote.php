<?php

$quotes   = json_decode(file_get_contents('quotes.json'), true);
$quotes[] = [
    'name'  => $argv[1],
    'quote' => $argv[2],
];
var_dump($quotes[array_key_last($quotes)]);

file_put_contents('quotes.json', json_encode($quotes));

function removeFirstAndLastChar(string $string)
{
    return substr($string, 1, -1);
}