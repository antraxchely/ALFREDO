<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include'inc/incluye_bootstrap.php';
        include 'inc/conexion.php';
        include 'inc/incluye_datatable_head.php';
        ?>
    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT *from marca");

                /* consulta con parametros
                  $sel = $con->prepare("SELECT *from marca WHERE marca_id<=?");
                  $parametro = 50;
                  $sel->bind_param('i', $parametro);
                  finaliza consulta con parámetros */

                $sel->execute();
                $res = $sel->get_result();
                $row = mysqli_num_rows($res);
                ?>


                <?php

                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tallerbd";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                
                $query = "SELECT * FROM `marca`";
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
                <br>
                <br>



                SE DEVUELVE LAS SIGUIENTES CONSULTAS <?php echo $row ?>
                
            </div>
        </div>
        <?php
        include 'inc/incluye_datatable_pie.php';
        ?>
    </body>
</html>

