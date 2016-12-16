<?php


require_once __DIR__.'/vendor/autoload.php';
require_once 'Joke.php';

$jokes = new Joke(new GuzzleHttp\Client());
echo 'Dowolny dowcip<br>';
echo $jokes->randomJoke();
$allJokes = $jokes->all();
echo '<br>';

echo 'Wszystkie dowcipy<br>';
foreach ($allJokes as $joke) {
    echo $joke['content'].'<br>';
}  
