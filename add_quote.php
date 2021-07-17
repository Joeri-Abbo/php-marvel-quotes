<?php
$path = '/Users/joeriabbo/Sites/marvel-quotes';
var_dump($path . '/quotes.json');


$quotes   = json_decode(file_get_contents($path . '/quotes.json'), true);
$quotes[] = [
    'name'  => $argv[1],
    'quote' => $argv[2],
];

$last_quote = $quotes[array_key_last($quotes)];

var_dump($last_quote);

//file_put_contents($path . '/quotes.json', json_encode($quotes));

exec("cd " . $path . " && git add .");
exec("cd " . $path . " && git commit -m'" . $last_quote['name'] . '' . $last_quote['quote'] . "'");

function removeFirstAndLastChar(string $string)
{
    return substr($string, 1, -1);
}