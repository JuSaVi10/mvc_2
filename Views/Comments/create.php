<h1>Crear Comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <p>Selecciona Usuario</p>
        <select name="user_id" id="">
        <?php
        foreach ($users as $user){
            echo '<option value='.$user['id'].'>'.$user['id'].$user['name'].'</option>';
        }
        ?> 
        </select>
    </div>
    <div class="form-group">
        <p>Seleccione un Post</p>
        <select name="post_id" id="">
        <?php
        foreach ($posts as $post){
            echo '<option value = '.$post['id'].'>'.$post['id'].$post['title'].'</option>';
        }
        ?> 
        </select>
    </div>

    <div class="form-group">
        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="password" placeholder="Introduzca un comentario nuevo" name="body">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>