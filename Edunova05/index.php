<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once 'predlozak/head.php'; ?>
	</head>
	<body>

		<?php include_once 'predlozak/zaglavlje.php'; ?>

		<?php include_once 'predlozak/izbornik.php'; ?>

		<div class="row">
			<div class="large-5 columns">
				<div class="success callout">
					<?php include_once 'predlozak/izbornikLijevo.php'; ?>
				</div>
			</div>
			<div class="large-7 columns">
				<div class="alert callout mojfont">
					sadrzaj
				</div>
				<div class="alert callout">
					<pre>
						<?php print_r($_SERVER) ?>
					</pre>
				</div>
			</div>
		</div>

		<?php include_once 'predlozak/podnozje.php'; ?>

		<?php include_once 'predlozak/skripte.php'; ?>
	</body>
</html>
