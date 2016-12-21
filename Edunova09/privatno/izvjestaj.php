<?php
include_once '../konfiguracija.php';
if(!isset($_SESSION["autoriziran"])){
	header("location: ../odjava.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once '../predlozak/head.php';
		?>
	</head>
	<body>
		<?php include_once '../predlozak/meni.php'; ?>
<div class="row">
	<div class="large-12 columns">
		<div class="success callout">
			<table>
				
			
			<?php 
			for($i=0;$i<96;$i++){
				echo "<tr>";
				for($j=0;$j<12;$j++){
					echo "<td>a</td>";
				}
				echo "</tr>";
			}
			
			 ?>
			 </table>
		</div>
	</div> 
</div>
		<?php
	include_once "../predlozak/skripta.php";
		?>
	</body>
</html>
