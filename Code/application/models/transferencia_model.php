<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transferencia_model extends CI_Model {

    public function transferir($idCuentaOrigen, $idCuentaDestino, $cantidad)
    {
        $this->db->trans_begin();

        // Restar saldo de la cuenta origen
        $this->db->set('saldo', 'saldo - ' . $cantidad, FALSE);
        $this->db->where('id_cuenta', $idCuentaOrigen);
        $this->db->update('cuenta');

        // Sumar saldo a la cuenta destino
        $this->db->set('saldo', 'saldo + ' . $cantidad, FALSE);
        $this->db->where('id_cuenta', $idCuentaDestino);
        $this->db->update('cuenta');

        // Registrar transferencia
        $data = array(
            'id_cuentaOrigen' => $idCuentaOrigen,
            'id_cuentaDestino' => $idCuentaDestino,
            'cantidad' => $cantidad,
            'fecha' => date('Y-m-d H:i:s')
        );
        $this->db->insert('transferencia', $data);

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return FALSE;
        }
        else
        {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
