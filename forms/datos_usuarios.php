<!-- id_Usuario	Nombre	Apellido	Tipo_Documento	Numero_Documento	Direccion	id_Nacionalidad -->
<form action="">
    <label for="id_usuario">Ingrese su usuario</label>
    <input type="search" list="lista-usuarios" id="id_usuario" name="id_usuario">
    <datalist id="lista-usuarios">
        <option value="1">GASTÓN</option>
        <option value="2">ALEJANDRO</option>
        <option value="3">Medina</option>
    </datalist>
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="apellido">Ingrese su apellido</label>
    <input type="text" name="apellido" id="apellido">
    <label for="tipo_documento">Seleccione el tipo de documento</label>
    <select name="tipo_documento" id="tipo_documento">
        <option value="DNI">DNI</option>
        <option value="LC">LC</option>
        <option value="LE">LE</option>
        <option value="CI">CI</option>
        <option value="PASS">PASS</option>
    </select>
    <label for="numero_documento">Ingrese su número de documento</label>
    <input type="tel" id="numero_documento" name="numero_documento">
    <label for="direccion">Ingrese su dirección</label>
    <input type="text" id="direccion" name="direccion">
    
    <label for="id_nacionalidad">Seleccione nacionalidad</label>
    <select name="id_nacionalidad" id="id_nacionalidad">
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