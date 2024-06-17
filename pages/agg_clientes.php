<?php include('../templates/cabecera_vista.php');?>
<?php include('../pages/clientes.php');?>
    <div class="tit">
        <h2>Ingresar datos</h2>
        <br>
    </div>

    <div class="Regis">
        <form action="#" method="post">
            
            <label class="msg" for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre del cliente"><br><br>

            <label class="msg" for="apellido_p">Apellido Paterno</label>
            <input type="text" id="apellido_p" name="apellido_p" placeholder="Escribe el apellido paterno del cliente"><br><br>

            <label class="msg" for="apellido_m">Apellido Materno</label>
            <input type="text" id="apellido_m" name="apellido_m" placeholder="Escribe el apellido materno del cliente"><br><br>
            
            <label class="msg" for="no_telefono">Teléfono</label>
            <input type="text" id="no_telefono" name="no_telefono" placeholder="Escribe el número del cliente"><br><br>
    

            <div class="Agregar">
                <button type="submit" name="accion" value="agregar">Agregar</button>
            </div>

        </form>
    </div>


<?php include('../templates/pie.php');?>
