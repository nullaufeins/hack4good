<?php

$menu = array(

    "en" => array(
        "/en/start" => "Start",
        "/en/participate" => "Participate",
        "/en/ngos" => "Projects",
        "/en/community" => "Community",
        "/en/supporters" => "Supporters",
        "/en/venue" => "Agenda & Venue",
        "/en/faq" => "FAQ",
        "/de/start" => "DE",
    ),

    "de" => array(
        "/de/start" => "Start",
        "/de/participate" => "Mitmachen",
        "/de/ngos" => "Projekte",
        "/de/community" => "Community",
        "/de/supporters" => "Unterstützer",
        "/de/venue" => "Ablauf & Ort",
        "/de/faq" => "FAQ",
        "/en/start" => "EN",
    )
);

function generateMenuForLanguage($language) {
    global $menu;
    foreach ($menu[$language] as $path => $topic) {
        $underline = strpos($_SERVER['PHP_SELF'], $path) === false ? "" : "-active";
        echo '<a href="' . BASE_URL . $path . '" class="nav-item' . $underline . '">' . $topic . '</a>';
    }
}
