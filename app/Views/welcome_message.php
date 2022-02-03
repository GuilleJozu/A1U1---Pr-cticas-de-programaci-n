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
			Arreglos en PHP
		  </p>
		  <p class="subtitle">
			Guillermo Josue 
		  </p>
		</div>
	  </section>


		<section class="section is-medium">
  		<h1 class="title">Arreglos en Php</h1>
  		<h2 class="subtitle">
    		Esta es una muestra de un array en php

			<?php
			$semana = array(1 => 'Domingo', 'Lunes', 'Martes', 'Miercoles'); 

			foreach ($semana as $dia) {
	   		echo $dia . "<br />";
	   		}
			?>
  		</h2>
		</section>



		

		<footer class="footer">
  		<div class="content has-text-centered">
    		<p>
      		<strong>Practica Creada por Guillermo Josue</strong> 
    		</p>
  		</div>
		</footer>

	

	
	

</body>
</html>