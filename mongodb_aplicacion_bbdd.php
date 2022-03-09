<?php

    // Nota: El cdigo HTML est "incrustado" en el cdigo PHP

	// Cargar COMPOSER para ver la librera mongodb
	require 'vendor\autoload.php';
	
	// ------------ CONEXIN -------------------------------------------------------------------
	// Sustituir por la cadena de conexin de local y de la nube, segn el caso
    // Datos de la cadena de conexin
    $host = "localhost"; // cambiar por localhost si local o la mquina que indica MongoDB Atlas si la nube
    $usuario = "mongodb"; // cambiar por tu usuario
    $password = "mongodb"; // cambiar por tu contrasea
	
	// Conexin sin bbdd
	$cadena_conexion = "mongodb+srv://".$usuario.":".$password."@".$host."/"."?retryWrites=true&w=majority";

    // Establecer la conexin a MongoDB
    $conexion = new MongoDB\Client($cadena_conexion);

    // Estado de la conexin
    if(!$conexion) {
		// Usar utf8_encode para que se muestren bien los caracteres con acentos y ees (codifica un string ISO-8859-1 a UTF-8)
        echo "Error: No se ha podido realizar la conexión.";
        exit;
    }

	// BBDD
	$db = $conexion->bbdd_prueba;
			
	// COLECCIN
	$coleccion = $db->ejemplo_coleccion;

	// ------------ CONSULTAS -------------------------------------------------------------------
    //<<<aadir consultaBASICA1>>>
    // Consulta BASICA 1
    function consulta_basica1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros mtodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta bsica 1");
            exit;
        }

		//<<<aadir mostrar consultaBASICA1>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA BSICA 1<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Aadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<aadir mostrar consultaBASICA1>>>	
	}
    // Realizar consultaBASICA1
    consulta_basica1($coleccion);	
	//<<<aadir consultaBASICA1>>>

    //<<<aadir consultaBASICA2>>>
    // Consulta BASICA 2
    function consulta_basica2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros mtodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta bsica 2");
            exit;
        }

		//<<<aadir mostrar consultaBASICA2>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA BSICA 2<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Aadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<aadir mostrar consultaBASICA2>>>	
	}
    // Realizar consultaBASICA2
    consulta_basica2($coleccion);	
	//<<<aadir consultaBASICA2>>>
	
    //<<<aadir consultaAVANZADA1>>>
    // Consulta AVANZADA 1
    function consulta_avanzada1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros mtodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 1");
            exit;
        }

		//<<<aadir mostrar consultaAVANZADA1>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 1<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Aadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<aadir mostrar consultaAVANZADA1>>>	
	}
    // Realizar consultaAVANZADA1
    consulta_avanzada1($coleccion);	
	//<<<aadir consultaAVANZADA1>>>

    //<<<aadir consultaAVANZADA2>>>
    // Consulta AVANZADA 2
    function consulta_avanzada2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros mtodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 2");
            exit;
        }

		//<<<aadir mostrar consultaAVANZADA2>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 2<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Aadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<aadir mostrar consultaAVANZADA2>>>	
	}
    // Realizar consultaAVANZADA2
    consulta_avanzada2($coleccion);	
	//<<<aadir consultaAVANZADA2>>>
	
	
    // Cerrar la conexin
    // El driver de MongoDB para PHP est diseado para dejar las conexiones abiertas, y no hay ningn mtodo para cerrarlas.

?>