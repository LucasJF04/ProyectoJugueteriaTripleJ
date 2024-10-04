
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carrito_model extends CI_Model {

    public function agregarProducto($data) {
      // Verificar si el producto ya está en el carrito
      $this->db->where('id_producto', $data['id_producto']);
      $this->db->where('id_cliente', $data['id_cliente']);
      $producto_existente = $this->db->get('carrito')->row();
  
      if ($producto_existente) {
        // Actualizar la cantidad si el producto ya existe
        $this->db->set('cantidad', 'cantidad + ' . (int)$data['cantidad'], FALSE);
        $this->db->where('id_producto', $data['id_producto']);
        $this->db->where('id_cliente', $data['id_cliente']);
        $resultado = $this->db->update('carrito');
  
        if ($resultado) {
          log_message('debug', 'Producto existente actualizado correctamente.');
        } else {
          log_message('error', 'Error al actualizar producto en el carrito.');
        }
  
      } else {
        // Insertar nuevo producto en el carrito
        $resultado = $this->db->insert('carrito', $data);
  
        if ($resultado) {
          log_message('debug', 'Producto insertado correctamente en el carrito.');
        } else {
          log_message('error', 'Error al insertar producto en el carrito.');
        }
      }
    }
  
    public function obtenerCarritoPorCliente($id_cliente) {
      $this->db->select('p.nombre, p.precio, p.imagen, c.cantidad');
      $this->db->from('carrito c');
      $this->db->join('producto p', 'c.id_producto = p.id_producto');
      $this->db->where('c.id_cliente', $id_cliente);
      return $this->db->get()->result();
    }
  }
  