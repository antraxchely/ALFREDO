<!– PARA EJEMPLO DASC — >
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--código que incluye Bootstrap-->
        <?php include'inc/incluye_bootstrap.php' ?>
        <!--termina código que incluye Bootstrap-->

    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                <h1>Registrar un DE LA SUCURSAL</h1>
                <form role="form" id="login-form" 
                      method="post" class="form-signin" 
                      action="proveedor_guardar.php">
                    
                    <div class="h2">
                        DATOS DE LA SUCURSAL
                    </div>
                    <div class="form-group">
                        <label for="nombre_del_proveedor">NOMBRE DE LA SUCURSAL</label>
                        <input type="text" class="form-control" id="nombre_del_proveedor" name="nombre_del_proveedor"
                               placeholder="Ingresa nombre del proveedor" style="text-transform:uppercase;" required>

                               <div class="form-group">
                              <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tallerbd";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                
                $query = "SELECT * FROM `proveedor`";
                $result2 = mysqli_query($connect, $query);

                $options = "";

                while($row2 = mysqli_fetch_array($result2))
                {
                    $options = $options."<option value='$row2[0]'>$row2[1]</option>";
                }
                ?>
                <font color="red" >
                <h3 align="center">DESPLIEGUE PARA CONSULTAR </h3>
                </font>
                <select>
                <?php echo $options;?>
                </select>
            </div>

                    <div class="form-group">
                        <label>Direcci&oacute;n</label>
                        <input type="text" class="form-control" id="direccion_del_proveedor" name="direccion_del_proveedor"
                               placeholder="Ingresa direcci&oacute;n (Tienda matriz)" style="text-transform:uppercase;">
                    </div>

                    <div class="form-group">
                        <label>Tel&eacute;fono 1</label>
                        <input type="tel" class="form-control" id="telefono_1" name="telefono_1"
                               placeholder="Ingresa primer tel&eacute;fono" style="text-transform:uppercase;">
                    </div>

                    <label>Tel&eacute;fono 2</label>
                    <input type="tel" class="form-control" id="telefono_2" name="telefono_2"
                           placeholder="Ingresa segundo tel&eacute;fono" style="text-transform:uppercase;">
                    <br>
                    <div class="form-group">
                        <label for="correo_proveedor">Correo electr&oacute;nico</label>

                        <input type="email" class="form-control" id="correo_proveedor" name="correo_proveedor"
                               placeholder="Ingresa correo electr&oacute;nico" style="text-transform:uppercase;">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <input type="reset" class="btn btn-default" value="Limpiar">
                </form>
            </div>
        </div>

    </body>
</html>

