<h1>Detalle Usuario</h1>
<div class="row col-md-12 centered">
<table class="table table-striped custab">
    <thead>
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Post ID</th>
        <th>Body</th>
        <th>Creado a:</th>
        <th>Actualizado a:</th>
        
    </tr>
    </thead>
    <?php
        echo '<tr>';
        echo "<td>" . $comment['id'] . "</td>";
        echo "<td>" . $comment['user_id'] . "</td>";
        echo "<td>" . $comment['post_id'] . "</td>";
        echo "<td>" . $comment['body'] . "</td>";
        echo "<td>" . $comment['created_at'] . "</td>";
        echo "<td>" . $comment['updated_at'] . "</td>";
       
        echo "</tr>";
    
    ?>
</table>
</div>
