<h1 class="nombre-pagina">Entrada y Salida</h1>

<a href="/admin" class="boton boton-admin">Volver</a>

<form action="/crear-ingreso" method="POST" class="formulario">
    <fieldset>
        <legend>Información General</legend>

        <div class="campo">
            <label for="ingreso">Hora Ingreso:</label>
            <input type="time" id="ingreso" name="ingreso" placeholder="ingreso">
        </div>
        
        <div class="campo">
            <label for="salida">Hora Salida:</label>
            <input type="time" id="salida" name="salida" placeholder="salida">
        </div>
        
        <div class="campo">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" placeholder="fecha">
        </div>
        
        <div class="campo">
            <label for="id">Empleado ID:</label>
            <input type="number" id="id" name="id" placeholder="id">
        </div>
        
    </fieldset>
    <input type="submit" value="Crear Nueva Entrada y Salida" class="boton">
</form>