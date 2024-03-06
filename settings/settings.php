<?php
define('DEBUG',true);
error_reporting(E_ALL);
$PALVELIN = $_SERVER['HTTP_HOST'];
$PALVELU = "projektit/KertoT";
$LANGUAGE = ["en","fi","ee","sv"];

session_start();
debuggeri("session:".session_id());
if (!isset($_SESSION['language'])){
    $_SESSION['language'] = "en";
    }
echo "Kieli on " . $_SESSION['language'];


