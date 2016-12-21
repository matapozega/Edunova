<div class="top-bar">
	<div class="top-bar-left">
		<ul class="menu">
			<li class="menu-text">
				<?php echo $naslov;  ?>
			</li>
			<li>
				<?php if(isset($_SESSION["autoriziran"])):
				?>
				<a href="<?php echo $putanjaAPP; ?>privatno/index.php">Početna</a>
			</li>
			<?php else: ?>
			<a href="<?php echo $putanjaAPP; ?>index.php">Početna</a></li>
			<?php endif; ?>
			<li>
				<a href="<?php echo $putanjaAPP; ?>onama.php">O nama</a>
			</li>
			<li>
				<a href="<?php echo $putanjaAPP; ?>kontakt.php">Kontakt</a>
			</li>
			<li>
				<a href="<?php echo $putanjaAPP; ?>baza.php">Baza</a>
			</li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<?php if(isset($_SESSION["autoriziran"])):
			?>
			<li>
				<a href="<?php echo $putanjaAPP; ?>privatno/postavke.php">Postavke</a>
			</li>
			<li>
				<a href="<?php echo $putanjaAPP; ?>privatno/profil.php">Profil</a>
			</li>

			<?php endif; ?>
			<li>
				<?php if(isset($_SESSION["autoriziran"])):
				?>
				<a href="<?php echo $putanjaAPP; ?>odjava.php">Odjavi se</a>
			</li>
			<?php else: ?>
			<a href="<?php echo $putanjaAPP; ?>login.php">Login</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>