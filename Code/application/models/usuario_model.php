<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

public function validar($email, $password)
{
    $this->db->select('id, nombre, apellido_Paterno, apellido_Materno, email, password, rol');
    $this->db->from('usuario');
    $this->db->where('email', $email);
    $query = $this->db->get();

    if ($query->num_rows() > 0)
    {
        $user = $query->row();
        // Verificar la contraseña
        if (password_verify($password, $user->password))
        {
            return $user;
        }
    }
    return false;
}

public function registrar($nombre, $apellido_Paterno, $apellido_Materno, $email, $password)
{
    // Asegúrate de encriptar la contraseña antes de almacenarla
    $data = [
        'nombre' => $nombre,
        'apellido_Paterno' => $apellido_Paterno,
        'apellido_Materno' => $apellido_Materno,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
    ];

    if ($this->db->insert('usuario', $data)) {
        return true;
    } else {
        // Aquí puedes ver el error de la base de datos
        log_message('error', 'Error al registrar usuario: ' . $this->db->last_query());
        return false;
    }
}


public function contar_usuarios()
{
    return $this->db->count_all('usuario'); // Cuenta los registros en la tabla 'usuario'
}

public function existe_email($email)
{
    $this->db->where('email', $email);
    $query = $this->db->get('usuario');
    return $query->num_rows() > 0;
}


public function obtener_todos()
{
    $query = $this->db->get('usuario');  // Reemplaza 'usuario' con el nombre correcto de tu tabla si es necesario
    return $query->result();  // Devuelve todos los registros
}

public function obtener_usuario_por_id($id) {
    return $this->db->where('id', $id)->get('usuario')->row();
}




public function eliminarUsuario($id)
{
    $this->db->where('id', $id);
    $this->db->delete('usuario');
}






public function modificarusuario($id,$data)
{
    $this->db->where('id',$idusuario);
    $this->db->update('usuario',$data);		
}


public function actualizar_usuario($id, $data) {
    return $this->db->where('id', $id)->update('usuario', $data);
}


}




















  





    







