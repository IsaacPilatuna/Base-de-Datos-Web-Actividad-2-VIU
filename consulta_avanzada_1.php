
<div class="card">
	<div class="card-header text-center">
		<h3>CONSULTA AVANZADA 1</h3>
		<h5>Recursos sociales agrupados por destinación</h5>
		<?php 

			$resultado = $coleccion->aggregate([
				[
					'$group' => [
						"_id" => ["destinacion"=>'$destinacion.destinacion'],
						"cantidad" => ['$sum'=>1],
					]
				]
			])->toArray(); 


			echo "<h6>".count($resultado)." resultados </h6>";
		?>
	</div>
	<div class="card-body">
			<table class='table table-striped table-bordered'>
				<thead class='thead-dark text-center'>
					<tr>
						<th>Destinacion</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($resultado as $documento) {
						echo "<tr>" . "<td>" . $documento['_id']['destinacion'] . "</td>" . "<td>" . $documento['cantidad'] . "</tr>";
					}
					?>
				</tbody>
			</table>
	</div>
</div>