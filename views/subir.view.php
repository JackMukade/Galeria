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
        
        <h1 class="titulo">Subir Foto</h1>
        
        </div>
    
    </header>
    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method = "post" enctype="multipart/form-data" class="formulario" >
            
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripción</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

            <?php if(isset($error)): ?>

                <p class="error"> <?php echo $error; ?></p>

            <?php endif; ?>

            <input type="submit" class="submit" value="Subir foto">
            
        </form>
    </div>
    <footer>
        <p class="copyright ">Galeria creada por Jacob May Gea</p>
    </footer>


    
</body>
</html>