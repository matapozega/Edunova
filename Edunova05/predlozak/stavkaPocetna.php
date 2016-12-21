<li<?php

$stranica = $putanjaAPP . "index.php";

if ($_SERVER["PHP_SELF"] === $stranica) {
	echo " class=\"active\"";
}
?>>
	<a href="<?php echo $stranica ?>"><i class="fi-list"></i> <span>Početna</span></a>
	</li>
