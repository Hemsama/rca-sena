<h1 class="nombre-pagina">Encomiendas</h1>

<a href="/encomienda" class="boton enlace2">Eliminar</a>

<form action="/modificar-encomienda" method="POST" class="formulario datos">

    <div class="campo">
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" placeholder="estado">
    </div>

    <div class="campo">
        <label for="destinatario">Destinatario:</label>
        <input type="text" id="destinatario" name="destinatario" placeholder="destinatario">
    </div>

    <input type="submit" value="Guardar" class="boton enlace">
</form>