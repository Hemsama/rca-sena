
<h1 class="nombre-pagina">Crear Contratista</h1>

<a href="/admin" class="boton boton-admin">Volver</a>

<form action="/crear-contratista" method="POST" class="formulario">
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
        
        <div class="campo">
            <label for="fechaEntrada">Fecha Entrada:</label>
            <input type="date" id="fechaEntrada" name="fechaEntrada" placeholder="Fecha Entrada">
        </div>
        
        <div class="campo">
            <label for="fechaSalida">Fecha Salida:</label>
            <input type="date" id="fechaSalida" name="fechaSalida" placeholder="Fecha Salida">
        </div>
    </fieldset>
    <input type="submit" value="Crear Contratista" class="boton">
</form>