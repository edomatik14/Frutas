<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "frutas";
    $username = "root";
    $password = "";

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $color = $_POST['color'];
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    $sql = "INSERT INTO frutas(nombre,tipo,color)
    VALUES ('$nombre','$tipo','$color')";

    if(mysqli_query($conn,$sql)){
        echo "Insercion de datos exitosa :3";
    }else{
        echo "Fallo la insercion de datos";
    }

    mysqli_close($conn);
    ?>
    <br>
    <a href="index.html">Volver</a>
    <br>
    <a href="../index.html" >INICIO</a>
</body>
</html>