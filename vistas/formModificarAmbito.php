<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Modificar Ambito</title>
</head>
<body>
    <form action="./modificar_ambito.php" method="POST">
       <input type="text" name="nombre" value="<?php echo $resultado[0]['nombre']; ?>">
        <label for="nombre">Introduce nombre</label>
        <input type="submit" value="Enviar">
     </form>
</body>
</html>