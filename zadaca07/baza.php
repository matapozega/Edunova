<?php
include_once 'konfig.php';
  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once 'predlozak/head.php';
		?>
	</head>
	<body>
		<?php
		include_once 'predlozak/topbar.php';
		?>
		<div class="row">
			<div class="large-12 columns">
				<div class="success callout">
					<h1>Korisnici</h1>
					<p>
					<table>
						<tr>
							<td>Korisničko ime</td>
							<td>Ime</td>
							<td>Prezime</td>
							<td>Email</td>
							<td>Oib</td>
						</tr>
					<?php
					$izraz = $veza -> prepare("select * from korisnik");
					$izraz -> execute();
					$rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
					foreach ($rezultati as $red):?>
						<!--echo $red->korime . " || " . $red->email . " || " . $red->ime . " || " . $red->prezime . " || " . $red->oib . "<hr />";-->

						<tr>
							<td><?php  echo $red -> korime; ?></td>
							<td><?php  echo $red -> ime; ?></td>
							<td><?php  echo $red -> prezime; ?></td>
							<td><?php  echo $red -> email; ?></td>
							<td><?php  echo $red -> oib; ?></td>

					
					<?php endforeach; ?></p>
						</tr>
						</table>
				</div>
			</div>
		</div>
	<?php include_once 'predlozak/skripte.php'?>
	</body>
</html>
