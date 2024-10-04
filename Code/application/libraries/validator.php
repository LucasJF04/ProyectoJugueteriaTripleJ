<?php

class Validador
{
    private $errores = [];

    public function validarNombre($nombre)
    {
        if (empty($nombre)) {
            $this->errores['nombre'] = 'El nombre es requerido.';
        } elseif (strlen($nombre) > 20) {
            $this->errores['nombre'] = 'El nombre no puede tener más de 20 caracteres.';
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $nombre)) {
            $this->errores['nombre'] = 'El nombre solo puede contener letras.';
        }
    }

    public function validarApellido($apellido, $tipo)
    {
        if (empty($apellido)) {
            $this->errores[$tipo] = 'El ' . $tipo . ' es requerido.';
        } elseif (strlen($apellido) > 20) {
            $this->errores[$apellido] = 'El ' . $tipo . ' no puede tener más de 20 caracteres.';
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $apellido)) {
            $this->errores[$tipo] = 'El ' . $tipo . ' solo puede contener letras.';
        }
    }

    public function validarEmail($email)
    {
        if (empty($email)) {
            $this->errores['email'] = 'El email es requerido.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errores['email'] = 'El email no es válido.';
        }
    }

    public function validarPassword($password)
    {
        if (empty($password)) {
            $this->errores['password'] = 'La contraseña es requerida.';
        } elseif (strlen($password) < 6) {
            $this->errores['password'] = 'La contraseña debe tener al menos 6 caracteres.';
        }
    }

    public function obtenerErrores()
    {
        return $this->errores;
    }

    public function hayErrores()
    {
        return !empty($this->errores);
    }
}