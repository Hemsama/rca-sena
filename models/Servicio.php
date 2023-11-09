<?php

namespace Model;

class Servicio extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'empleados_empresa';
    protected static $colunmasDB = ['id', 'nombre', 'apellido', 'email', 'telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }
}