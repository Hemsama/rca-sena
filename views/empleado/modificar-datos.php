<h1 class="nombre-pagina">Datos Usuario</h1>

<a href="/inicio" class="boton enlace2">Volver</a>

<form action="/modificar-datos" method="POST" class="formulario datos">

    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
    </div>

    <div class="campo">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="apellido">
    </div>

    <div class="campo">
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" placeholder="cedula">
    </div>

    <div class="campo">
        <label for="email">Correo:</label>
        <input type="emai" id="email" name="email" placeholder="Email">
    </div>

    <div class="campo">
        <label for="id">Identificador empleado:</label>
        <input type="number" id="id" name="id" placeholder="id">
    </div>

    <div class="campo">
        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
    </div>

    <div class="campo">
        <label for="area">Area Trabajo:</label>
        <input type="text" id="area" name="area" placeholder="area">
    </div>

    <input type="submit" value="Guardar" class="boton enlace">
</form>