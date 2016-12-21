<?php 
session_start();


if(isset($_POST["autorizacija"])){
	if($_POST["korisnik"]==="Pero" && $_POST["lozinka"]==="P"){
		$o= new stdClass();
		$o->sifra=1;
		$o->ime="Pero";
		$o->prezime="Pingvin";
		$_SESSION["autoriziran"]=$o;
		header("location: privatno/index.php");
		exit;
	}
	elseif ($_POST["korisnik"]==="Nikola" && $_POST["lozinka"]==="N"){
		$o= new stdClass();
		$o->sifra=2;
		$o->ime="Nikola";
		$o->prezime="Pingvin";
		$_SESSION["autoriziran"]=$o;
		header("location: privatno/index.php");
		exit;		
	}	
	elseif($_POST["korisnik"]==="Nikola" && $_POST["lozinka"]==="N"){
		$o= new stdClass();
		$o->sifra=2;
		$o->ime="Nikola";
		$o->prezime="Pingvin";
		$_SESSION["autoriziran"]=$o;
		header("location: privatno/index.php");
		exit;
	}
	else {
		header("location: login.php?korisnik=".$_POST["korisnik"]);
	}	
}



 ?>