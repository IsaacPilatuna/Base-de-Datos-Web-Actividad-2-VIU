
<div class="card">
	<div class="card-header text-center">
		<h3>CONSULTA AVANZADA 2</h3>
		<h5>Recursos sociales fuera de la zona céntrica</h5>
		<?php 
			$filter = ["geometry.coordinates.0" => ["$gt" => -0.34]];
			$resultado = $coleccion->find([
				'$or' => [
					["geometry.coordinates.0" => ['$gt' => -0.34]],
					["geometry.coordinates.0" => ['$lt' => -0.4]],
					["geometry.coordinates.1" => ['$gt' => 39.5]],
					["geometry.coordinates.1" => ['$lt' => 39.4]]
				]
			])->toArray(); 

			echo "<h6>".count($resultado)." resultados </h6>";
		?>
	</div>
	<div class="card-body">
			<table class='table table-striped table-bordered'>
				<thead class='thead-dark text-center'>
					<tr>
						<th>ID</th>
						<th>Descripción</th>
						<th>Titularidad</th>
						<th>Destinación</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($resultado as $documento) {
						echo "<tr>" . "<td>" . $documento['_id'] . "</td>" . "<td>" . $documento['descripcion'] . "</td>" . "<td>" . $documento['titularidad'] . "</td>" . "<td>" . $documento['destinacion']['destinacion'] . "</td>" . "</tr>";
					}
					?>
				</tbody>
			</table>
	</div>
</div>