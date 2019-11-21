<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <style type="text/css">
            img{
                transition: 1s;
                padding: 15px;
                width: 100px

            }

            img:hover {
                transform: scale(3.0);
            }


        </style>
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
                $sel = $con->prepare("SELECT *from refaccion");


                $sel->execute();
                $res = $sel->get_result();
                $row = mysqli_num_rows($res);
                ?>



                Elementos devueltos por la consulta: <?php echo $row ?>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>ID REFACCION</th>
                    <th>ID MARCA</th>
                    <th>REFACCION NOMBRE</th>
                    <th>REFACCION DESCRIPCION</th>
                    <th>IMAGEN</th>
                    </thead>
                    <tfoot>
                    <th>ID REFACCION</th>
                    <th>ID MARCA</th>
                    <th>REFACCION NOMBRE</th>
                    <th>REFACCION DESCRIPCION</th>
                    <th>IMAGEN</th>
                    </tfoot>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $f['refaccion_id'] ?></td>
                                <td><?php echo $f['marca_id'] ?></td>
                                <td><?php echo $f['refaccion_nombre'] ?></td>
                                <td><?php echo $f['refaccion_descripcion'] ?></td>
                                <td><img src="<?php echo $f['refaccion_imagen'] ?>" class="img-thumbnail img-fluid" > </td>
                            </tr>
                            <?php
                        }
                        
                        $sel->close();
                        $con->close();
                        ?>
                    <tbody>
                </table>
            </div>
        </div>
        <?php
        include 'inc/incluye_datatable_pie.php';
        ?>
    </body>
</html>