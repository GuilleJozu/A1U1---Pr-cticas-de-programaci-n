<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>"> 
</head>
<body>

	
		<section class="hero is-danger">
		<div class="hero-body">
		  <p class="title">
			Formulario para solicitud de empleo
		  </p>
		  <p class="subtitle">
			Formulario para ocupar puesto de trabajo en Patito S.A de C.V  
		  </p>
		</div>
	  </section>


		<section class="section">
			<div class="columns">
				<div class="column"></div>
				<div class="column is-two-fifths">
					<form action="procesar.php" method="post">
						<div>
						<label>Nombre</label>
						<input class="input is-danger" type="text" name="nombre" placeholder="E.J Guillermo">
						</div>

						<div>
						<label>Apellido Materno</label>
						<input class="input is-danger" type="text" name="apep" placeholder="E.J Martinez">
						</div>

						<div>
						<label>Apellido Materno</label>
						<input class="input is-danger" type="text" name="apem" placeholder="E.J Navarrete">
						</div>

						<div>
						<label>Correo Electronico</label>
						<input class="input is-danger" type="text" name="correo" placeholder="E.J guille@gmail.com">
						</div>

						<div>
						<label>Cargo o puesto que se solicita</label>
						<input class="input is-danger" type="text" name="cargo" placeholder="Cargo">
						</div>

						<div>
						<label>RFC</label>
						<input class="input is-danger" type="text" name="rfc" placeholder="E.J CAPV841211G54">
						</div>
					
						<div>
						<label>CURP</label>
						<input class="input is-danger" type="text" name="curp" placeholder="E.J MAHJ280603MSPRRV09">
						</div>

						<div>
						<label>Domicilio</label>
						<input class="input is-danger" type="text" name="domicilio" placeholder="E.J Calle 5 De Mayo #510 Col: Benito Juarez">
						</div>

						<div>
						<label>Telefono</label>
						<input class="input is-danger" type="text" name="phone" placeholder="E.J 2251140410">
						</div>
						
						<div>
						<label>Sexo</label>
						<input class="input is-danger" type="text" name="sexo" placeholder="Masculino o Femenino">
						</div>

						<div>
						<label>Fecha de nacimiento</label>
						<input class="input is-danger" type="text" name="nac" placeholder="E.j 20/10/2002">
						</div>

						<div>
						<label>Estado Civil</label>
						<input class="input is-danger" type="text" name="ec" placeholder="Soltero o Casado">
						</div>

						<div>
						<label>Escolaridad</label>
						<input class="input is-danger" type="text" name="esco" placeholder="E.J Primaria terminada">
						</div>

						<div>
						<label>Referencia Familiar</label>
						<input class="input is-danger" type="text" name="ref" placeholder="Nombre completo y numero de telefono">
						</div>

						<div>
						<label>Observciones</label>
						<input class="input is-danger" type="text" name="obs" placeholder="Observaciones">
						</div>

						<div>
						<input type="summit" class="button is-danger is-rounded" button class="small" value="Guardar">
						</div>
					</form>

				</div>
				<div class="column"></div>
			</div>	

		</section>



		

		<footer class="footer">
  		<div class="content has-text-centered">
    		<p>
      		<strong>Developed By Guillermo Josue Martinez Navarrete © Derechos Reservados Patito S.A De C.V 2021-2022 Todos los derechos reservados</strong> 

    		</p>
  		</div>
		</footer>

	

	
	

</body>
</html>