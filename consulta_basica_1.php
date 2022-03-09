
<div class="card">
	<div class="card-header text-center">
		<h3>CONSULTA BÁSICA 1</h3>
		<h5>Recursos sociales destinados a adultos mayores</h5>
		<?php 

			$resultado = $coleccion->find(array('destinacion.destinacion' => 'Adultos mayores'))->toArray(); 
			
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