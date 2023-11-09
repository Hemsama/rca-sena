<h1 class="nombre-pagina">Visitas</h1>

<a href="/visita" class="boton enlace2">Eliminar</a>

<form action="/modificar-visita" method="POST" class="formulario datos">

    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
    </div>

    <div class="campo">
        <label for="email">Correo:</label>
        <input type="emai" id="email" name="email" placeholder="Email">
    </div>

    <div class="campo">
        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
    </div>

    <div class="campo">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" placeholder="asunto">
    </div>

    <div class="campo">
        <label for="fecha">Fecha Visita:</label>
        <input type="text" id="fecha" name="fecha" placeholder="fecha">
    </div>

    <input type="submit" value="Guardar" class="boton enlace">
</form>