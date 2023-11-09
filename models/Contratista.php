<?php

namespace Model;

class Contratista extends ActiveRecord{
    // Base de datos 
    protected static $tabla = 'contratistas';
    protected static $columnasDB = ['id','fecha_entrada', 'fecha_salida', 'telefono', 'nombre' ,'email', 'empleados_empresa_empleado_id'];

    public $id;
    public $fecha_entrada;
    public $fecha_salida;
    public $telefono;
    public $nombre;
    public $email;
    public $empleados_empresa_empleado_id;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->fecha_entrada = $args['fecha_entrada'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha_salida = $args['fecha_salida'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->empleados_empresa_empleado_id = $args['empleados_empresa_empleado_id'] ?? '';
    }

    // Mensajes de validación para la creación de una cuenta
    public function validarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['error'][] = "El nombre es obligatorio";
        }

        if(!$this->fecha_entrada){
            self::$alertas['error'][] = "El fecha_entrada es obligatorio";
        }

        if(!$this->email){
            self::$alertas['error'][] = "El email es obligatorio";
        }

        if(!$this->fecha_salida){
            self::$alertas['error'][] = "El fecha_salida es obligatorio";
        }

        return self::$alertas;
    }

}