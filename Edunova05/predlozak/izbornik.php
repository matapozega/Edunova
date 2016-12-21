<div class="row">
	<div class="large-12 columns">
		<ul class="menu icon-top">
			
			<?php include_once 'stavkaPocetna.php'; ?>
			
			<li<?php 
			
			$stranica = $putanjaAPP . "gore/if.php";
			
			if ($_SERVER["PHP_SELF"]===$stranica){
				echo " class=\"active\"";
			}
			
			?>>
				<a href="<?php echo $stranica ?>"><i class="fi-paperclip"></i> <span>IF</span></a>
			</li>
			<li<?php 
			
			$stranica = $putanjaAPP . "gore/kontakt.php";
			
			if ($_SERVER["PHP_SELF"]===$stranica){
				echo " class=\"active\"";
			}
			
			?>>
				<a href="<?php echo $stranica ?>"><i class="fi-at-sign"></i> <span>Kontakt</span></a>
			</li>
		</ul>
	</div>
</div>