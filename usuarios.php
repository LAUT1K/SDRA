<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>SDRA E.E.S.T. Nº2</title>
		<link rel="icon" href="css/favicon.ico" type="image/ico">
		<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link href="css/styles.css" rel="stylesheet" />
		<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	</head>
	<body class="sb-nav-fixed">
		  <!--Nav Bar-->

		  <?php include("navbar.php")?>
		  
			<div id="layoutSidenav_content">
			
				<main>
				<!-- Cominezo de los formularios -->
					<div class="container px-4">
						<h1 class="mt-2">Gestion Usuarios</h1>
						<div class="row justify-content-around">
							<div class="col-md-4 col-sm-6 mb-4">
								<div class="card">
									<div class="card-header">
										<i class="fas fa-table me-1"></i>
										CREAR USUARIO
									</div>
									<div class="card-body">
										<form action="#" method="post">
											<div class="row">
												<div class="form-group col">
														<label for="nombre">Nombre:</label>
														<input type="text" class="form-control" id="nombre" name="nombre" required>
												</div>
												<div class="form-group col">
														<label for="apellido">Apellido:</label>
														<input type="text" class="form-control" id="apellido" name="apellido" required>
												</div>
											</div>
											<div class="form-group col ">
												<label for="fechaNac">Fecha de Nacimiento:</label>
												<input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
											</div>
											<div class="form-group row">
												<div class="col">
													<label for="dni">N°Documento:</label>
													<input type="text" class="form-control" id="dni" name="dni" required>
												</div>
												
											</div>
											<div class="row">
												<div class="col">
													<label for="año">Contraseña:</label>
													<input type="text" class="form-control" id="telefono" name="telefono" required>
												</div>
                                                
											</div>	
                                            
											<div class="form-group">
												<label for="tecnicatura">Selecciona La jerarquia:</label>
													<select class="form-select" name="tecnicatura" id="tecnicatura">
														<option value="">Preceptor</option>
														<option value="">Director</option>
														<option value="">Super Admin</option>
													</select>
											</div>
											<br>
											<input class="btn btn-success" type="submit" value="Crear">
										</form>
									</div>
								</div>
	
							</div>
					
							
					
							<!-- Agrega más tarjetas según sea necesario -->
						</div>
					</div>
				<!--Fin de los formularios  -->
				
				</main>
				
				
				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid px-4">
						<div class="d-flex align-items-center justify-content-between small">
							<div class="text-muted">Copyright &copy; E.E.S.T. Nº2</div>
							
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/chart-area-demo.js"></script>
		<script src="assets/demo/chart-bar-demo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
		<script src="js/datatables-simple-demo.js"></script>
	</body>
</html>
