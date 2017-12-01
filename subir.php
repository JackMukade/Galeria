<?php 

require 'funciones.php'; 
$conexion = conexion('curso_galeria', 'root', '');

if(!$conexion){
    //header('Location: error.php'); #Paginas de errores 404 etc
    die();
}

#$_FILES son la variable en donde se guardan los archivos
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){

    #temp_name, dentro del arreglo $_Files se guarda la informacion de donde esta temporalmente
    $check = @getimagesize($_FILES['foto']['tmp_name']); #regresa un arreglo si es una imagen, si no es regresa un false, (@ error de tipo notice)

    #si existe una imagen
    if($check !== false){

        #carpeta ya creada
        $carpeta_destino = 'fotos/';

        #carpeta ya creada + nombre del archivo.
        $archivo_subido  = $carpeta_destino . $_FILES['foto']['name'];

        #La imagen que esta en el array, se mueve a la carpeta de destino
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $sql = $conexion -> prepare('INSERT INTO fotos(titulo, imagen, descripcion) VALUES (:titulo, :imagen, :texto)');
        $sql -> execute(array(':titulo' => $_POST['titulo'], ':imagen' => $_FILES['foto']['name'], ':texto' => $_POST['texto']));
        
        header('Location: index');


    }else{

        $error = "El archivo no es una imagen o el archivo es muy pesado";

    }



}



require 'views/subir.view.php';

?>