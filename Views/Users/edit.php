<h1>Editar Usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="title" placeholder="Introduzca un nuevo nombre" name="name" value ="<?php if (isset($user["name"])) echo $user["name"];?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="description" placeholder="Introduzca un nuevo email" name="email" value ="<?php if (isset($user["email"])) echo $user["email"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>