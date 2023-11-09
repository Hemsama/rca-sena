<h1 class="nombre-pagina">Reserva</h1>

<a href="/reserva" class="boton enlace2">Volver</a>

<form action="/crear-reserva" method="POST" class="formulario datos">

    <div class="campo">
        <label for="espacio">Espacio:</label>
        <input type="text" id="espacio" name="espacio" placeholder="espacio">
    </div>

    <div class="campo">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" placeholder="fecha">
    </div>

    <div class="campo">
        <label for="hora">hora:</label>
        <input type="time" id="hora" name="hora" placeholder="hora">
    </div>

    <input type="submit" value="Reservar" class="boton enlace">
</form>