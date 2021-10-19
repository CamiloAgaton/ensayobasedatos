<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conexion_bd.php" method="POST">
        <h1>Documentos</h1>
        <input type="number" name="cedula" placeholder="Documento de identidad"/><br>
        <input type="text" name="nombre" placeholder="Nombre"/><br>
        <input type="text" name="contra" placeholder="Apellido"/><br>
        <input type="email"name="correo" placeholder="Correo"/><br>  
        <input type="numbre" name="celular" placeholder="Numero celular"/><br>
        <input type="text" name="ciudad" placeholder="Ciudad"/><br>
        <input type="submit" name="enviar" value="Enviar"><br>
    </form>
    <?php
    include("registro.php"); 
    ?>
</body>
</html>