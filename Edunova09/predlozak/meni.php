<div class="row">
	<div class="large-12 columns">
		<ul class="menu">
			<li>
				<a href="<?php echo $putanjaAPP ?>index.php">Početna</a>
			</li>
			<li>
				<a href="<?php echo $putanjaAPP  ?>privatno/index.php">Privatno</a>
			</li>
			<li>
				<a href="<?php echo $putanjaAPP ?>onama.php">O nama</a>
			</li>
			<?php if(isset($_SESSION["autoriziran"])): ?>
			<li>				
				<a href="<?php echo $putanjaAPP ?>privatno/izvjestaj.php">Izvještaj</a>
			</li>
			<?php endif;  ?>
			<li>
				<?php if(isset($_SESSION["autoriziran"])): ?>
					<a href="<?php echo $putanjaAPP  ?>odjava.php">Odjava</a>
					<?php else:  ?>
				<a href="<?php echo $putanjaAPP  ?>autorizacija.php">autorizacija</a>
				<?php endif;  ?>
			</li>
		</ul>

	</div>

</div>