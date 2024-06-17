<?php include('../templates/cabecera_vista.php');?>
<?php include('../pages/clientes.php');?>

<div id="titulo">
            <h2>Estilistas</h2>
        </div>
        <div id="mas">
            <a href="cita.html"><i class="fa-solid fa-plus" ></i></a>
        </div>
        <br>
        <table class="tabla">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>numero</th>
                <th>Puesto</th>
                <th>edad</th>
                <th>Operaciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nallely Salas</td>
                <td>56-29-55-27-62</td>
                <td>Estilista</td>
                <td>26</td>
                <td><a href="estilista.html"><i class="fa-solid fa-pen"></i></a>  <a href="estilista.html"><i class="fa-solid fa-trash"></i></a>
            </tr>
            <tr>
                <td>2</td>
                <td>Mariel Sanchez</td>
                <td>56-44-25-57-75</td>
                <td>Estilista</td>
                <td>34</td>
                <td><a href="estilista.html"><i class="fa-solid fa-pen"></i></a>  <a href="estilista.html"><i class="fa-solid fa-trash"></i></a>
            <tr>
                <td>3</td>
                <td>Marta Carrillo</td>
                <td>55-44-54-98-66</td>
                <td>Estilista</td>
                <td>44</td>
                <td><a href="estilista.html"><i class="fa-solid fa-pen"></i></a>  <a href="estilista.html"><i class="fa-solid fa-trash"></i></a>
            </tr>
        </table>

<?php include('../templates/pie.php');?>