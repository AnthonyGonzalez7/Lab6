<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Anthony:sQ330xf8eevaz05O@lab6.urwtlse.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultados = $tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($_GET["id"])]);
    echo "Registros eliminados ". $resultados->getDeletedCount();
