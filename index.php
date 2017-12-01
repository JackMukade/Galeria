<?php 

require 'funciones.php'; 

$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int) $_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0 ;

$conexion = conexion('curso_galeria', 'root', '');

if(!$conexion){
    //header('Location: error.php'); #Paginas de errores 404 etc
    die();
}


$qry = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$qry -> execute();

$fotos = $qry-> fetchAll();

if(!$fotos){
    header('Location: index');
}


$qry = $conexion -> prepare("SELECT FOUND_ROWS() AS total_filas");
$qry -> execute();

$total_post = $qry -> fetch()['total_filas'];


$total_paginas = ($total_post/ $fotos_por_pagina);
$total_paginas = ceil($total_paginas);








require 'views/index.view.php';

?>