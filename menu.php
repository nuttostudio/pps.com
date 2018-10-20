<nav class="navbar navbar-expand-lg sticky-top">
	<a class="navbar-brand m-0" href="./">LOGO</a>
	<button class="btn-toggle toggle-scroll m-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<?php 
			for ($i=0; $i < 5; $i++) { 
				?>
				<li class="nav-item">
					test
				</li>
				<?php
			}
			?>
		</ul>
	</div>
</nav>
