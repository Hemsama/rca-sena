<?php

namespace Controllers;

use Model\Contratista;
use MVC\Router;

class AdminController
{
    public static function index(Router $router)
    {
        $admin = true;
        $router->render('admin/index', [
            'admin' => $admin
        ]);
    }

    public static function crearContratista(Router $router)
    {
        $contratista = new Contratista;
        $admin = true;

        // Alertas vacias 
        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contratista->sincronizar($_POST);
            $alertas = $contratista->validarNuevaCuenta();

            // Revisar que alerta este vacio 
            if (empty($alertas)) {

                // Crear el usuario 
                $resultado = $contratista->guardar();

                if ($resultado) {
                    header('Location: /admin');
                }
            }
        }

        $router->render('admin/contratista/crear-contratista', [
            'contratista' => $contratista,
            'alertas' => $alertas,
            'admin' => $admin
        ]);
    }

    public static function crearEmpleado(Router $router)
    {
        $admin = true;
        $router->render('admin/empleado/crear-empleado', [
            'admin' => $admin
        ]);
    }

    public static function crearIngreso(Router $router)
    {
        $admin = true;
        $router->render('admin/ingreso/crear-ingreso', [
            'admin' => $admin
        ]);
    }

    public static function crearInventario(Router $router)
    {
        $admin = true;
        $router->render('admin/inventario/crear-inventario', [
            'admin' => $admin
        ]);
    }

    public static function crearDetector(Router $router)
    {
        $admin = true;
        $router->render('admin/detector/crear-detector', [
            'admin' => $admin
        ]);
    }
}
