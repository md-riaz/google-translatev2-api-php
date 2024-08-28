<?php
require_once 'src/Client.php';

try {
    $client = new \GoogleTranslate\Client('your-api-key-here');

    echo $client->translate('Hello world!', 'bn', $sourceLanguage);
    // output: Olá Mundo!

    echo $sourceLanguage;
    // output: en
} catch (\Throwable $e) {
    echo $e->getMessage();
}
