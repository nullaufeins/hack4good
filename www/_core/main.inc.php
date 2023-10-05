<?php

function getLanguage() {
    if (!defined('LANGUAGE')) {
        if (str_contains($_SERVER['PHP_SELF'], "/de/")) {
            return "de";
        }
        return "en"; 
    }
} 

$language = $language ?: getLanguage();

$baseUrls = array(
    "staging.hack-for-good.de" => "https://staging.hack-for-good.de",
    "www.hack-for-good.de-localhost" => "https://www.hack-for-good.de-localhost",
    "localhost" => "http://localhost:8010"
    );

define("BASE_PATH", __DIR__);
define("BASE_URL", $baseUrls[$_SERVER['SERVER_NAME']] ?: "https://staging.hack-for-good.de");

require_once "defaultpage.inc.php";