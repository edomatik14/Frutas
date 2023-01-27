<?php
    $servername = 'localhost';
    $database = 'frutas';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername,$username,$password,$database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consulta frutas</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="cointainer-fluid">
            <div class="row justify-content-center mt-2s">
                <div class="col-auto pt-2">
                    <h4>TABLA DE FRUTAS</h4>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <table class="table table-hover table-responsive">
                        <thead class="thead-default thead-inverse">
                            <th>NOMBRE</th>
                            <th>TIPO</th>
                            <th>COLOR</th>
                        </thead>
                            <?php
                                $sql="SELECT * FROM frutas";
                                $result = mysqli_query($conn,$sql);


                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo " 
                                            <tr>
                                                <td>" . $row["Nombre"] . "</td>
                                                <td>" . $row["Tipo"] . "</td>
                                                <td>" . $row["Color"] . "</td>
                                            </tr> ";
                                }
                            }   else {
                                    echo "No hubo resultados";
                                } 
                                mysqli_close($conn);
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
