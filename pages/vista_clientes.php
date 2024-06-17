<?php include('../templates/cabecera_vista.php');?>
<?php include('../pages/clientes.php');?>



<div id="titulo">
            <h2>Clientes</h2>
        </div>
        <div id="mas">
            <a href="../pages/agg_clientes.php"><i class="fa-solid fa-plus-circle"></i>Agregar</a>
        </div>
        <br>
        <table class="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Numero</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($listaClientes as $cliente){ ?>
                <tr>
                    <td> <?php echo $cliente['id_cliente']; ?> </td>
                    <td> <?php echo $cliente['nombre']; ?> </td>
                    <td> <?php echo $cliente['apellido_p']; ?> </td>
                    <td> <?php echo $cliente['apellido_m']; ?> </td>
                    <td> <?php echo $cliente['no_telefono']; ?> </td>
                    <td> 
                        <form action="#" method="post">
                            <div class="botones">
                                <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $cliente['id_cliente']; ?>"/>
                                <input type="submit" name="accion" value="editar"/>
                                <input type="submit" name="accion" value="eliminar"/>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php } ?>
                
            </tbody>
          
        </table>


<?php include('../templates/pie.php');?>
