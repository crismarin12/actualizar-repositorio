<?php
    include("db.php");
  $con=connection();
    $sql="SELECT * FROM personal";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> FORMULARIO </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
            <div class="row">
            <div class="col-md-3">
                <h1> FORMULARIO </h1>
                <h2>Ingresa Datos </h2>
                <form action="update.php" method="POST">
                        <input type="hidden" name="cedula" value="<?php echo $row['cedula'] ?>">
                        <input type="text" class="form-control mb-3" name="nombres" placeholder="nombre" value="<?php echo $row['nombres'] ?>">
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellido" value="<?php echo $row['apellidos'] ?>">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo'] ?>">
                        <input type="text" class="form-control mb-3" name="curso" placeholder="curso" value="<?php echo $row['curso'] ?>">
                    <input type="submit" class="btn btn-primary">
                </form>
                </div>
                <div class="col-md-8"> 
                    <h1>MOSTRAR TABLA</h1>
                </div>   
            </div>
            </div> 
    </body>
</html>