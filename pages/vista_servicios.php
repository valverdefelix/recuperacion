<?php include('../templates/cabecera_vista.php');?>
<?php include('../pages/clientes.php');?>

<div id="titulo">
            <h2>Servicios</h2>
        </div>
        <div id="mas">
            <a href="cita.html"><i class="fa-solid fa-plus" ></i></a>
        </div>
        <br>
        <table class="tabla">
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>ID_ticket</th>
                <th>Servicio</th>
                <th>Operaciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Itzel Fernandez</td>
                <td>56-19-25-27-62</td>
                <td>27 de marzo a las 8:00pm</td>
                <td>Aplicacion de uñas</td>
                <td><a href="cita.html"><i class="fa-solid fa-pen" ></i></a>  <a href="cita.html"><i class="fa-solid fa-trash" ></i></a>
            </tr>
            <tr>
                <td>2</td>
                <td>Amairani Sanchez</td>
                <td>56-24-25-46-75</td>
                <td>30 de marzo a las 9:00am</td>
                <td>Diseño de color</td>
                <td><a href="cita.html"><i class="fa-solid fa-pen" ></i></a>  <a href="cita.html"><i class="fa-solid fa-trash" ></i></a>
            </tr>
            <tr>
                <td>3</td>
                <td>Astrid Celeste</td>
                <td>55-34-54-98-67</td>
                <td>5 de abril a las 11:00am</td>
                <td>Pedicure</td>
                <td><a href="cita.html"><i class="fa-solid fa-pen" ></i></a>  <a href="cita.html"><i class="fa-solid fa-trash" ></i></a>
            </tr>
            <tr>
                <td>4</td>
                <td>Mario Aguilar</td>
                <td>55-45-65-75-96</td>
                <td>2 de abril a la 1:00pm</td>
                <td>Corte de pelo</td>
                <td><a href="cita.html"><i class="fa-solid fa-pen" ></i></a>  <a href="cita.html"><i class="fa-solid fa-trash" ></i></a>
            </tr>
        </table>

<?php include('../templates/pie.php');?>