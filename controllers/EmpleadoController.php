<?php

namespace Controllers;

use MVC\Router;

class EmpleadoController {
    public static function index( Router $router){

        $empleadoEmpresa = true;
        $router->render('empleado/index', [
            'nombre' => $_SESSION['nombre'],
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function encomienda( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/encomienda', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function visita( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/visita', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function reserva( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/reserva', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function modificarDatos( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/modificar-datos', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function modificarEncomienda( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/modificar-encomienda', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function crearEncomienda( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/crear-encomienda', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function modificarVisita( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/modificar-visita', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function crearVisita( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/crear-visita', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function modificarReserva( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/modificar-reserva', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }

    public static function crearReserva( Router $router){
        $empleadoEmpresa = true;
        $router->render('empleado/crear-reserva', [
            'empleadoEmpresa' => $empleadoEmpresa
        ]);
    }
}