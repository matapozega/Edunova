<?php
include_once '../konfig.php';
if (!isset($_SESSION["autoriziran"])) {
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
		<?php
		include_once '../predlozak/topbar.php';
		?>
		<?php for($i=0;$i<3;$i++): ?>
		<div class="row small-up-1 medium-up-2 large-up-3">
			<?php for($j=0;$j<3;$j++):  ?>
			<div class="column">
				<div class="callout">
					<p>
						Pegasi B
					</p>
					<p><img src="http://placehold.it/400x370&text=Pegasi B" alt="image of a planet called Pegasi B">
					</p>
					<p class="lead">
						Copernican Revolution caused an uproar
					</p>
					<p class="subheader">
						Find Earth-like planets life outside the Solar System
					</p>
				</div>
			</div>
			<?php endfor;  ?>
		</div>
		<?php endfor;  ?>
			<?php include_once '../predlozak/skripte.php'
			?>
	</body>
</html>
