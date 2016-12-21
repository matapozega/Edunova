<?php include_once '../konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once '../predlozak/head.php'; ?>
	</head>
	<body>

		<?php include_once '../predlozak/zaglavlje.php'; ?>

		<?php include_once '../predlozak/izbornik.php'; ?>

		<div class="row">
			<div class="large-5 columns">
				<div class="success callout">
					<?php include_once '../predlozak/izbornikLijevo.php'; ?>
				</div>
			</div>
			<div class="large-7 columns">
				<div class="alert callout">
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
						<label>Prvi broj
							<input type="number" required="required" name="prviBroj" />
						</label>
						<label>Drugi broj
							<input type="number" required="required" name="drugiBroj" />
						</label>
						<input name="izracun" class="button siroko" type="submit" value="Izračunaj zbroj" />
					</form>
					<?php 
					
					if(isset($_POST["izracun"])){
						echo $_POST["prviBroj"] + $_POST["drugiBroj"];
					}else{
						echo "Unesite brojeve";
					}
					
					// = je dodjeljivanje
					$a=34;
					$b="34";
					
					
					//== je provjeravanje vrijednosti
					
					if($a==$b){
						echo "<hr />jednaki su po vrijednost";
					}
					
					
					//=== provjerava tip i vrijednost
					
					if($a===$b){
						echo "<hr />jednaki su po tipu i vrijednosti";
					}else{
						echo "<hr />NISU jednaki su po tipu i vrijednosti";
					}
					
					
					
					//loše
					if($a==$b)
						echo "";
						echo "";
					
						//dobro
					if($a==$b){
						echo "";
						echo "";
					
					}
					
					
					//alternativa
					
					if($a==$b):
						echo "";
					else:
						echo "";
					endif;
					
					
					
					//inline if
					
					//varijanta 1
					if($a==2){
						echo "OK";
					}else{
						echo "N";
					}
					
					
					//varijanta 2
					echo $a==2 ? "OK" : "N";
					
					
					
					if($a<9){
						if($b==3){
							echo "";
						}
					}
					
					if($a<9 && $b==3){
						echo "";
					}
					
					if($a<9 || $b==3){
						echo "";
					}
					
					
					 ?>
				</div>
			</div>
		</div>

		<?php include_once '../predlozak/podnozje.php'; ?>

		<?php include_once '../predlozak/skripte.php'; ?>
	</body>
</html>
