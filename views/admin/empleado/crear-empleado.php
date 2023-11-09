<h1 class="nombre-pagina">Crear Empleado</h1>

<a href="/admin" class="boton boton-admin">Volver</a>

<form action="/crear-empleado" method="POST" class="formulario">
    <fieldset>
        <legend>Información General</legend>

        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        
        <div class="campo">
            <label for="email">Email:</label>
            <input type="emai" id="email" name="email" placeholder="Email">
        </div>
        
        <div class="campo">
            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
        </div>
        
    </fieldset>
    <input type="submit" value="Crear Empleado" class="boton">
</form>