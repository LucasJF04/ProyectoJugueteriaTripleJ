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
        // Encriptar la contraseña con password_hash
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
        $data = array(
            'nombre' => $nombre,
            'apellido_Paterno' => $apellido_Paterno,
            'apellido_Materno' => $apellido_Materno,
            'email' => $email,
            'password' => $password_hash
        );

        return $this->db->insert('usuario', $data);
    }

    public function existe_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0;
    }

    
    private function validar_nombre($nombre)
    {
        return preg_match('/^[a-zA-Z\s]+$/', $nombre);
    }

   

    public function obtenerUsuarios()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }







    public function obtener()
    {
        $query = $this->db->get('usuario');
        return $query->result();
    }
    





    public function transferir($idCuentaOrigen, $idCuentaDestino, $cantidad) {
        
        $this->db->trans_begin();
    
       
        $this->db->set('saldo', 'saldo - ' . $cantidad, FALSE);
        $this->db->where('id_cuenta', $idCuentaOrigen);
        $this->db->update('cuenta');
    
       
        $this->db->set('saldo', 'saldo + ' . $cantidad, FALSE);
        $this->db->where('id_cuenta', $idCuentaDestino);
        $this->db->update('cuenta');
    
        
        $data = array(
            'id_cuentaOrigen' => $idCuentaOrigen,
            'id_cuentaDestino' => $idCuentaDestino,
            'cantidad' => $cantidad,
            'fecha' => date('Y-m-d H:i:s')
        );
        $this->db->insert('transferencia', $data);
    
        
        if ($this->db->trans_status() === FALSE) {
            
            $this->db->trans_rollback();
            return FALSE;
        } else {
            
            $this->db->trans_commit();
            return TRUE;
        }
    }
    
    
    public function guardar($data) {
        $this->db->insert('producto', $data);
    }


    
    
}



    







