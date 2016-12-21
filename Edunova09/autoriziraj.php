<?php
session_start();


if(isset($_POST["autorizacija"])){
	//ovo je ručna autorizacija, raditi ćemo na bazu podataka
	if($_POST["korisnik"]==="pero" && $_POST["lozinka"]==="p"){
		$o = new stdClass();
		$o->sifra=1;
		$o->ime="Pero";
		$o->prezime="Mali";
		$_SESSION["autoriziran"]=$o;
		header("location: privatno/index.php");
		exit;
	}
	else {
		header("location: autorizacija.php?korisnik=".$_POST["korisnik"]);
	}
}
