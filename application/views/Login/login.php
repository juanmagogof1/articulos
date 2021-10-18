
	<header>
		<div class="imagen">
			<h1>LOGO</h1>
		</div>
	</header>
	<main>
		<section class="login">
		  <form action="<?php echo site_url('log_in'); ?>" method="POST">
			<div class="input-group mb-3 input-group-sm inputs">
			 <div class="input-group-prepend">
			    <span class="input-group-text">Usuario</span>
			 </div>
			 <input type="text" class="form-control" id='txtUser' name='txtUser'>
			</div>
			<div class="input-group mb-3 input-group-sm inputs">
			 <div class="input-group-prepend">
			    <span class="input-group-text">Contraseña</span>
			 </div>
			 <input type="password" class="form-control" id='txtPsw' name='txtPsw'>
			</div>
			<button type="submit" class="btn btn-success" name="btnIngresar" onclick="this.value = '1'">Ingresar</button>
			<button type="submit" class="btn btn-link" name="btnRegistrarme" onclick="this.value = '1'">Registrarme</button>
		</form>

		</section>
	</main>
