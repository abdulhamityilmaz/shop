<?php

session_start();

require_once( '../includes/functions.inc.php' );
// get_header( string $title,bool $bootstrap=false, string $header=NULL,  string/array $css=NULL, array $nav=NULL, bool $fluid=false )
$args = array(
    'Royal Sweets', //Titel
    '../css/styles.css',//eigene CSS - Datei 
    true, // Bootstrap wird benutzt
    'Royal Sweets - Ihr Süßigkeiten-Geschäft', //Haupt-Überschrift
    array(
        '<img src="images/rs-logo-150x77.png" alt = "Royal Sweeets Logo">', // Branding
        array(
            'Start' => 'index.php',
            'Pralinen' => 'pralinen.php',
            'Schokolade' => 'schokolade.php',
            'Warenkorb' => 'warenkorb.php'
        ) //Navigation
    )   
);
include 'artikel.inc.php';
get_header( ...$args );
