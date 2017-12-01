<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="contenedor">
        
        <h1 class="titulo"><?php if( !empty($foto['titulo'] ) ) { echo $foto['titulo']; } else { echo $foto['imagen']; }?></h1>
        
        </div>
    
    </header>
    <div class="contenedor">
        <div class="foto">
            <img  src= "fotos/<?php echo $foto['imagen']?> ">
            <p class="texto"> <?php echo $foto['descripcion']?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>
    <footer>
        <p class="copyright ">Galeria creada por Jacob May Gea</p>
    </footer>


    
</body>
</html>