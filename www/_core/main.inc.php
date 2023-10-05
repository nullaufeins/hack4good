<?php

function getLanguage() {
    if (strpos($_SERVER['PHP_SELF'], "/de/") !== false) {
        return "de";
    }
    return "en"; 
} 

$language = isset($language) ? $language : getLanguage();

$baseUrls = array(
    "staging.hack-for-good.de" => "https://staging.hack-for-good.de",
    "www.hack-for-good.de-localhost" => "https://www.hack-for-good.de-localhost",
    "localhost" => "http://localhost:8010"
    );

define("BASE_PATH", __DIR__);
define("BASE_URL", $baseUrls[$_SERVER['SERVER_NAME']] ?: "https://hack-for-good.de");

require_once "defaultpage.inc.php";