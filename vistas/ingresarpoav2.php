<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">POA</a></li>
		<li><a id ="tab-actividad" data-toggle="tab" href="#menu1">Actividad</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<?php 
			include('vistas/ingresarPOA.php');
			?>
		</div>
		<div id="menu1" class="tab-pane fade">
			<?php
			include('vistas/Actividades.php');
			?>
		</div>
	</div>
</div>