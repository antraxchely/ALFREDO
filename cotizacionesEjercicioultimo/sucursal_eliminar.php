<?php

include 'inc/conexion.php';
	$sucursal_id = $_GET['id_sucursal'];

	$ins = $con->prepare("DELETE from sucursal_prov where sucursal_id=?");
		/*sucursal_id*/

			$ins->bind_param("i",$sucursal_id);

					if ($ins->execute()) 
					{
    						header("Location: aviso.php?tipo=exito&operacion=Sucursal Eliminada&destino=ver_sucursal.php");
					} 					
					else {
    						header("Location: aviso.php?tipo=fracaso&operacion=Sucursal No Eliminada&destino=ver_sucursal.php");
						 }
					$ins->close();
					$con->close();