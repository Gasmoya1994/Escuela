<form method="post" action="">
    <input type="hidden" value="usuarios" name="tabla">
    <label for="Usuario">Usuario</label>
    <input type="text" class="form-control" id="Usuario" name="Usuario" required>
    <label for="correo">Mail</label>
    <input type="email" class="form-control" name="correo" id="correo">
    <label for="clave">Contraseña</label>
    <input type="password" class="form-control" id="clave" name="clave" required>
    <label for="clavedos">Repita la Contraseña</label>
    <input type="password" class="form-control" id="clavedos" name="clave" required>
    <button class="btn btn-success">Aceptar</button>
</form>