
	<html>
		

	<head>
			<title>Netflix</title>
			<script> var ORBI_PATH = 'index.php';</script>		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">		
			<meta name="viewport" content="initial-scale=1, maximum-scale=1">
			<link href="website/imagenes/favicon.ico" rel="shortcut icon"/>

			
			<link href="website/assets/bootstrap/css/style.css"  type="text/css" rel="stylesheet">
			

			<link rel="stylesheet" href="website/assets/bootstrap/css/bootstrap.min.css">

			<!-- Optional theme -->
			<link rel="stylesheet" href="website/assets/bootstrap/css/bootstrap-theme.css">

		</head>
		<!-- onload="whizzywig()" -->
		<body>
		<script language="javascript"> 
		 
			   
		</script>
		
			
			
			<div id="pantalla_blanca">
			    <div id="contendor-barra">
			        <div id="barra"></div>
			    </div>
			</div>


			<div id="subdiv-encabezado">
				<div id="div-encabezado">
				
	<div class="logo">
		
		<a href="index.php"><img id="encabezado" src="website/imagenes/upload/logo.png"></img></a>
		
	</div>
				</div>
			</div>
			<div id="div-contenedor" class="container">
				<div id="div-contenedor-pagina">

				<div id='div-contenido-2'>				<link href="css/login.css"  type="text/css" rel="stylesheet">

	
	<style type="text/css">
		
		#div-contenedor {
			width: 100%;
			height: auto;
			margin: 0px auto;
			background: black;
		}

		.first-row{
			margin-top: 5%;
		}

		#divRegistrate{
			display: none;
		}

		.sesion{
			font-size: 20px;
		}

		#sesion1{
			background: black;

		}

	</style>

	<div class="container222">
		<div class="row text-center first-row">
			<div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4">
				<p class="fs32 text-center" style="line-height: 25px">Iniciar Sesión</p>
				<p class="fs32 text-center" style="line-height: 25px">NETFLIX</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4" id="sesion1">
				<div class="middle-box">
					<div id="btnRegistro">	
						

						<form action="#" method="post" id="form1">

							<div class="form-group">
								<div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user"></i></span>
								  <input type="text" name="usuario" class="required form-control text-left input-lg" minlength="3" maxlength="100" placeholder="Usuario" autofocus />
								</div>
							</div>

							<div class="form-group">
								<div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
								  <input type="password" name="contrasena" class="required form-control text-left input-lg" minlength="5" maxlength="40" placeholder="Contraseña"/>
								</div>
							</div>



								<button id='btnSesion' name="submit" onclick="javascript:iniciarSesion();" class="btn btn-block btn-danger btn-lg"><span>Iniciar Sesión</span><i class="fa fa-spinner fa-spin" style="display:none;"></i></button>


						

								
						</form>	
						<?php

	        include("website/congif.php");

	        if(isset($_POST['submit']))
	        {
	        	if($_POST['usuario'] == '' or $_POST['contrasena'] == '')
	    {
	        echo "Debe llenar todos los campos por favor.";
	    }else{
	        
	             $sql = 'SELECT * FROM usuarios';
	             $rec = mysqli_query($conexion,$sql);
	             $verificar = 0;
	        
	             while($resultado = mysqli_fetch_object($rec))
	             {
	                 if($resultado->user == $_POST['usuario'])
	                 {
	                     $verificar = 0;
	                 }
	             }
	             if($verificar == 0)
	             {
	                         $nom = $_POST['usuario'];
	                         $pw = $_POST['contrasena'];
	            
	                         $conexion->query("INSERT INTO usuarios (user,pass) VALUES ('$nom','$pw')");
	                         mysqli_query($conexion,$sql);
	                 
	                 
	                         echo "Te has registrado con exito.";
	             }else{
	                  echo "El nombre de usuario ya esta en nuestra base de datos, por favor prueba otro.";
	              }
	        }
	        }
		?>


				</div>

			</div>
		</div>
	</div>

	<div class="espacio"></div>
					</div>		
							
							</div>
			</div>

			
			<div id="div-piedepagina">
				
				<div class="divInformacionPie">
					
				<div class="divInformacionPieL">	
					</div>
			
						<p>Copyright 2019, NETFLIX</p>
						<a target="_blank"  href="http://www.itla.edu.do/"><p>Registrarse Ahora - NETFLI</p></a>
						<a target="_blank"  href="#"><p>Politicas de privacidad | Términos de uso.</p></a>
					</div>
			</div>
		</body>
	</html>
