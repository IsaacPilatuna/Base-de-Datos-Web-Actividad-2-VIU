<head>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.card{
			border-radius:1rem;
			margin: 1rem;
		}
		.card-body {
			max-height: 250px;
			overflow-y: auto;
		}

		.thead-dark {
			background-color: #04005B;
			color: white
		}
	</style>
</head>
<?php



// Cargar COMPOSER para ver la librera mongodb
require 'vendor\autoload.php';


$host = "basededatosviu.ixjes.mongodb.net"; // cambiar por localhost si local o la mquina que indica MongoDB Atlas si la nube
$database = "recursos_sociales";
$usuario = "mongodb"; // cambiar por tu usuario
$password = "<password>"; // cambiar por tu contrasea


$cadena_conexion = "mongodb+srv://" . $usuario . ":" . $password . "@" . $host . "/" . $database;


$conexion = new MongoDB\Client($cadena_conexion);

// Estado de la conexin
if (!$conexion) {

	echo "Error: No se ha podido realizar la conexión.";
	exit;
}

// BBDD
$db = $conexion->recursos_sociales;

// COLECCION
$coleccion = $db->recurso_social;

?>

<?php 

@include './consulta_basica_1.php';
@include './consulta_basica_2.php';
@include './consulta_avanzada_1.php';
@include './consulta_avanzada_2.php';
?>
