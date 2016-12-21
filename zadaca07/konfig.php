<?php
session_start();
$putanjaAPP = "/zadaca07/";
$naslov = "Zadaca07";
if ($_SERVER["SERVER_NAME"] === "localhost") {
	$host = "localhost";
	$imeBaze = "jaakuu";
	$korisnik = "edunova";
	$lozinka = "edunova";
} else {
	$host = "sql304.byethost7.com";
	$imeBaze = "b7_19171738_jaakuu";
	$korisnik = "b7_19171738";
	$lozinka = "GjSq.865";
}

$veza = new PDO("mysql:host=" . $host . ";dbname=" . $imeBaze, $korisnik, $lozinka, 
array(	PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>