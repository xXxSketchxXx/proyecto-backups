<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buttons.css">
</head>
<body>
    <div class="form-register">
        <h4>Differential Back Up</h4>
        <form action="tu_archivo_php_de_procesamiento.php" method="post">
            <input class="controls" type="text" name="text1" id="text1" placeholder="Ingrese la ruta del directorio a guardar" required>
            <input class="controls" type="text" name="text2" id="text2" placeholder="Ingrese ruta en donde guardar" required>
            <input class="controls" type="password" name="password" id="password" placeholder="Ingrese Contraseña" required>
            <input class="botons" type="submit" value="Differential Back Up">
        </form>
        
    </div>
</body>
</html>