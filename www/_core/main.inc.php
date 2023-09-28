<?php

$baseUrls = array(
    "staging.hack-for-good.de" => "https://staging.hack-for-good.de",
    "www.hack-for-good.de-localhost" => "https://www.hack-for-good.de-localhost",
    "localhost" => "http://localhost:8888"
    );

print($_SERVER['SERVER_NAME']);

define("BASE_PATH", __DIR__);
define("BASE_URL", $baseUrls[$_SERVER['SERVER_NAME']] ?: "https://staging.hack-for-good.de");

require_once "defaultpage.inc.php";