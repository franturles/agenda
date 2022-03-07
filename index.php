<?php
include_once('db.php');
include_once('vista.php');

$db = conectar();
if($db==false){
    echo "Hubo problemas conectando";
}

Cabecera();
$contactos = listarContactos($db);
mostrarContactos($contactos);

if(!desconectar($db)){
    echo "Hubo problemas desconectando";
}

Pie();