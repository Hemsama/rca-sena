<h1 class="nombre-pagina">Crear Inventario</h1>

<a href="/admin" class="boton boton-admin">Volver</a>

<form action="/crear-inventario" method="POST" class="formulario">
    <fieldset>
        <legend>Información General</legend>

        <div class="campo">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="cantidad">
        </div>
        
        <div class="campo">
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto" placeholder="producto">
        </div>
        
    </fieldset>
    <input type="submit" value="Crear Inventario" class="boton">
</form>