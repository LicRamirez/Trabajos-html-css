<?php
    $txtID=(isset($_POST['txtID'])) ? $_POST['txtID'] : "";
    $txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $txtApellidoP=(isset($_POST['txtApellidoP'])) ? $_POST['txtApellidoP'] : "";
    $txtApellidoM=(isset($_POST['txtApellidoM'])) ? $_POST['txtApellidoM'] : "";
    $txtCorreo=(isset($_POST['txtCorreo'])) ? $_POST['txtCorreo'] : "";
    $txtFoto=(isset($_POST['txtFoto'])) ? $_POST['txtFoto'] : "";

    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    include ("../Conexion/conexion.php");
    switch($accion)
    {
        case "btnAgregar":

                $sentencia=$pdo->prepare("INSERT INTO empleados(nombre,apellidop,apellidom,correo,foto) VALUES (:nombre,:apellidop,:apellidom,:correo,:foto)");
                $sentencia->bindParam(':nombre',$txtNombre);
                $sentencia->bindParam(':apellidop',$txtApellidoP);
                $sentencia->bindParam(':apellidom',$txtApellidoM);
                $sentencia->bindParam(':correo',$txtCorreo);
                $sentencia->bindParam(':foto',$txtFoto);
                $sentencia->execute();

                echo $txtID;
                echo "LE apachurraste a btnAgreagar"; break;
        case "btnModificar":
            echo $txtID;
            echo "Le apachurraste al de modificar"; break;
        case "btnEliminar":
            echo $txtID;
            echo "Le apachurraste al de Eliminar"; break;
        case "btnCancelar":
            echo $txtID;
            echo "Le apachurraste al de Cancelar"; break;
    }

    $sentencia = $pdo->prepare("SELECT * FROM empleados");
    $sentencia->execute();
    $listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    print_r($listaEmpleados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con Bootstrap, PHP y MySQL</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">ID:</label>
            <input type="text" name="txtID" value="<?php echo $txtID?>" placeholder="" id="txtID" require="">
            <br>
            <label for="">Nombre(s):</label>
            <input type="text" name="txtNombre" value="<?php echo $txtNombre?>" placeholder="" id="txtNombre" require="">
            <br>
            <label for="">Apellido Paterno:</label>
            <input type="text" name="txtApellidoP" value="<?php echo $txtApellidoP?>" placeholder="" id="txtApellidoP" require="">
            <br>
            <label for="">Apellido Materno:</label>
            <input type="text" name="txtApellidoM" value="<?php echo $txtApellidoM?>" placeholder="" id="txtApellidoM" require="">
            <br>
            <label for="">Correo:</label>
            <input type="text" name="txtCorreo" value="<?php echo $txtCorreo?>" placeholder="" id="txtCorreo" require="">
            <br>
            <label for="">Foto:</label>
            <input type="text" name="txtFoto" value="<?php echo $txtFoto?>" placeholder="" id="txtFoto" require="">
            <br>
            <button value="btnAgregar" type="submit" name="accion">Agregar</button>
            <button value="btnModificar" type="submit" name="accion">Modificar</button>
            <button value="btnEliminar" type="submit" name="accion">Eliminar</button>
            <button value="btnCancelar" type="submit" name="accion">Cancelar</button>
        </form>


        <div>
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
</html>