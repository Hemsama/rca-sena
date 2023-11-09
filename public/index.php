<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\EmpleadoController;
$router = new Router();

// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

// Crear Cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

// AREA PRIVADA
$router->get('/inicio', [EmpleadoController::class, 'index']);
$router->get('/modificar-datos', [EmpleadoController::class, 'modificarDatos']);
$router->post('/modificar-datos', [EmpleadoController::class, 'modificarDatos']);

$router->get('/encomienda', [EmpleadoController::class, 'encomienda']);
//Modificar
$router->get('/modificar-encomienda', [EmpleadoController::class, 'modificarEncomienda']);
$router->post('/modificar-encomienda', [EmpleadoController::class, 'modificarEncomienda']);
//Crear
$router->get('/crear-encomienda', [EmpleadoController::class, 'crearEncomienda']);
$router->post('/crear-encomienda', [EmpleadoController::class, 'crearEncomienda']);

$router->get('/visita', [EmpleadoController::class, 'visita']);
//Modificar
$router->get('/modificar-visita', [EmpleadoController::class, 'modificarVisita']);
$router->post('/modificar-visita', [EmpleadoController::class, 'modificarVisita']);
//Crear
$router->get('/crear-visita', [EmpleadoController::class, 'crearVisita']);
$router->post('/crear-visita', [EmpleadoController::class, 'crearVisita']);

$router->get('/reserva', [EmpleadoController::class, 'reserva']);
//Modificar
$router->get('/modificar-reserva', [EmpleadoController::class, 'modificarReserva']);
$router->post('/modificar-reserva', [EmpleadoController::class, 'modificarReserva']);
//Crear
$router->get('/crear-reserva', [EmpleadoController::class, 'crearReserva']);
$router->post('/crear-reserva', [EmpleadoController::class, 'crearReserva']);


$router->get('/admin', [AdminController::class, 'index']);

$router->get('/crear-contratista', [AdminController::class, 'crearContratista']);
$router->post('/crear-contratista', [AdminController::class, 'crearContratista']);

$router->post('/crear-empleado', [AdminController::class, 'crearEmpleado']);
$router->get('/crear-empleado', [AdminController::class, 'crearEmpleado']);

$router->post('/crear-ingreso', [AdminController::class, 'crearIngreso']);
$router->get('/crear-ingreso', [AdminController::class, 'crearIngreso']);

$router->post('/crear-inventario', [AdminController::class, 'crearInventario']);
$router->get('/crear-inventario', [AdminController::class, 'crearInventario']);

$router->post('/crear-detector', [AdminController::class, 'crearDetector']);
$router->get('/crear-detector', [AdminController::class, 'crearDetector']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();