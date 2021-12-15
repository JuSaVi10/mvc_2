<h1>Detalle Usuario</h1>
<div class="row col-md-12 centered">
<table class="table table-striped custab">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Creado a:</th>
        <th>Actualizado a:</th>
        
    </tr>
    </thead>
    <?php
        echo '<tr>';
        echo "<td>" . $users['id'] . "</td>";
        echo "<td>" . $users['name'] . "</td>";
        echo "<td>" . $users['email'] . "</td>";
        echo "<td>" . $users['password'] . "</td>";
        echo "<td>" . $users['created_at'] . "</td>";
        echo "<td>" . $users['updated_at'] . "</td>";
       
        echo "</tr>";
    
    ?>
</table>
</div>






