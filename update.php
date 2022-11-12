<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Anthony:sQ330xf8eevaz05O@lab6.urwtlse.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;
  /*  $id = $_GET["id"];
    $resultado = $tablaColeccion->updateOne(["_id" => new MongoDB\BSON\ObjectId($id)],
                                            ['$set' => [
                                                        "correo"=>$_GET["correo"],
                                                        "mensaje"=>$_GET["mensaje"]
                                                        ]  
                                            ]);
    echo "Cantidad de registros actualizaos " . $resultado->getModifiedCount();
*/
    $resultado = $tablaColeccion->updateOne(["correo" => $_GET["correo"]],
    ['$set' => [
                "mensaje"=>$_GET["mensaje"]
                ]  
    ]);
echo "Cantidad de registros actualizaos " . $resultado->getModifiedCount();