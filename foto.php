<?php 

require 'funciones.php'; 

$conexion = conexion('curso_galeria', 'root', '');

if(!$conexion){
    //header('Location: error.php'); #Paginas de errores 404 etc
    die();
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : false;

if(!$id){

    header('Location: index');

}

$qry = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$qry -> execute(array(':id' => $id));

$foto = $qry -> fetch();

if(!$foto){

    header('Location: index');

}

require 'views/foto.view.php';



?>