<?php


include_once '../config/bd.php';
$conexionBD=BD::crearInstancia();

$id_cliente=isset($_POST['id_cliente'])?$_POST['id_cliente']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$apellido_p=isset($_POST['apellido_p'])?$_POST['apellido_p']:'';
$apellido_m=isset($_POST['apellido_m'])?$_POST['apellido_m']:'';
$no_telefono=isset($_POST['no_telefono'])?$_POST['no_telefono']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!=''){

    switch ($accion) {
        case 'agregar':
            $sql="INSERT INTO clientes (id_cliente,nombre,apellido_p,apellido_m,no_telefono) VALUES (NULL,:nombre,:apellido_p,:apellido_m,:no_telefono)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellido_p',$apellido_p);
            $consulta->bindParam(':apellido_m',$apellido_m);
            $consulta->bindParam(':no_telefono',$no_telefono);
            $consulta->execute();
            break;
            case 'eliminar':
                $sql= "DELETE FROM clientes WHERE id_cliente=:id_cliente";
                $consulta= $conexionBD->prepare($sql);
                $consulta->bindParam(':id_cliente',$id_cliente);
                $consulta->execute();
                print_r($consulta);
            break;
        }

}



$consulta=$conexionBD->prepare("SELECT * FROM clientes");
$consulta->execute(); 
$listaClientes=$consulta->fetchAll();


?>