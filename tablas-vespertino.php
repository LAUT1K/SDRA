<?php
// Incluir el archivo de conexión o agregar la lógica de conexión aquí
include('conectar.php');

// Resto del código...
?>


<div class="card-body" style="background-color: #333; color: white; position: relative;">
				<table class="table" style="opacity:1 ;background-color: #333 !important;  padding: 0;">
					<!-- Creación de la tabla de edición -->
					<thead>
						<tr style="text-align: center;">
							<th>ID</th>
							<!-- Nombres de columnas -->
							<th>DNI</th>
							<th>Nombre</th>
							<th>Apellido</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * FROM docente";
						$result_tasks = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_assoc($result_tasks)) {
							?>
							<tr style="color:#fff;">
								
								<td  style="text-align: center;"><?php echo $row['id']; ?></td>
								<td style="text-align: center;"><?php echo $row['dni']; ?></td>
								<td style="text-align: center;"><?php echo $row['nombre']; ?></td>
								<td style="text-align: center;"><?php echo $row['apellido']; ?></td>
								<td>
									<div style="text-align: center;">
										<a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-dark btn-sm">
											<i class="fas fa-marker"></i>
										</a>
										<a href="borrar.php?id=<?php echo $row['id']; ?>" class="btn btn-dark btn-sm">
											<i class="fas fa-trash-alt"></i>
										</a>
									</div>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
