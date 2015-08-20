<?php include("parts/header.php"); ?>
	
	<h1>Registro de estudiantes</h1>
	<div class="form-group">
		<label>Nombre</label><br>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre">
	</div>

	<div class="form-group">
		<label>Apellido(s)</label><br>
		<input type="text" id="apellidos" name="apellidos" placeholder="Apellido(s)">
	</div>

	<div class="form-group">
		<label>Email</label><br>
		<input type="email" id="email" name="email" placeholder="Email">
	</div>

	<div class="form-group">
		<label>Edad</label><br>
		<input type="number" id="edad" name="edad" placeholder="Edad">
	</div>

	<button class="btn btn-primary" id="buttonRegister">Registrar</button>


<?php include('parts/footer.php'); ?>