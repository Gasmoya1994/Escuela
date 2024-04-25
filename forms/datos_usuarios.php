<!-- id_Usuario	Nombre	Apellido	Tipo_Documento	Numero_Documento	Direccion	id_Nacionalidad -->
<form method="post">
    <input type="hidden" value="datos_usuarios" name="tabla">
    <label for="id_usuario">Ingrese su usuario</label>
    <input type="search" class="form-control" list="lista-usuarios" id="id_usuario" name="id_usuario">
    <datalist id="lista-usuarios">
        <option value="1">GASTÓN</option>
        <option value="2">ALEJANDRO</option>
        <option value="3">Medina</option>
    </datalist>
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre">
    <label for="apellido">Ingrese su apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido">
    <label for="tipo_documento">Seleccione el tipo de documento</label>
    <select name="tipo_documento" class="form-control" id="tipo_documento">
        <option value="DNI">DNI</option>
        <option value="LC">LC</option>
        <option value="LE">LE</option>
        <option value="CI">CI</option>
        <option value="PASS">PASS</option>
    </select>
    <label for="numero_documento">Ingrese su número de documento</label>
    <input type="tel" class="form-control" id="numero_documento" name="numero_documento">
    <label for="direccion">Ingrese su dirección</label>
    <input type="text" id="direccion" class="form-control" name="direccion">
    
    <label for="id_nacionalidad">Seleccione nacionalidad</label>
    <select class="form-control" name="id_nacionalidad" id="id_nacionalidad">
        <option value="1">Argentina</option>
        <option value="2">Brasil</option>
        <option value="3">Uruguay</option>
        <option value="4">Venezuela</option>
        <option value="5">Colombia</option>
        <option value="6">Chile</option>
        <option value="7">Perú</option>
    </select>
    <button>Aceptar</button>
</form>