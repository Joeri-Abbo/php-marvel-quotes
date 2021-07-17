<?php
$path = getcwd();


$quotes   = json_decode(file_get_contents('quotes.json'), true);
$quotes[] = [
    'name'  => $argv[1],
    'quote' => $argv[2],
];

$last_quote = $quotes[array_key_last($quotes)];

var_dump($last_quote);

file_put_contents('quotes.json', json_encode($quotes));

exec("git add .");
exec("git commit -m'" . $last_quote['name'] . $last_quote['quote'] ."'");

function removeFirstAndLastChar(string $string)
{
    return substr($string, 1, -1);
}