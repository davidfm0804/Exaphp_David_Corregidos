<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar ambitos</title>
</head>
<body>
    <a href="./formulario_alta.php">Añadir minijuego</a></br>
    <?php
            foreach($resultado as $ambito){
             echo $ambito['nombre'];
             echo '<a href="./formulario_modificar.php?id='.$ambito['idambito'].'">Modificar</a>';
             echo '</br></br>';
            }
        ?>
</body>
</html>