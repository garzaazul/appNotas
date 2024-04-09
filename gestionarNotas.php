<?php

//rescatando o recuperando los datos del formulario usando variables
$titulo         = $_POST["titulo"];
$descripcion    = $_POST["descripcion"];
$fecha          = $_POST["fecha"];
$estado         = $_POST["estado"];
$operacion      = $_POST["operacion"];

switch ($operacion) {
    case 'crearNota':
        echo "Creando nota";
        break;
    case 'traerNota':
        echo "Trayendo info de nota";
        break;
    case 'actualizarNota':
        echo "Actualizando nota";
        break;
    case 'eliminarNota':
        echo "Eliminando nota";
        break;
    }



?>