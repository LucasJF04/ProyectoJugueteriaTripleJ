<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

    
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Cargar la base de datos
    }

    public function obtenerProductos() {
        $query = $this->db->get('producto'); // Consulta para obtener todos los registros de la tabla 'producto'
        return $query->result(); // Devolver los resultados como un array de objetos
    }
// Método para agregar un nuevo producto
public function agregarProducto($datos_producto)
{
    $this->db->insert('producto', $datos_producto); // Insertar un nuevo producto en la tabla 'producto'
}

// Manejo de transferencias




public function buscarProducto($criterio) {
    $this->db->like('nombre', $criterio);
    $this->db->or_like('descripcion', $criterio);
    $query = $this->db->get('producto');
    return $query->result();
}

public function actualizarProducto($id, $datos) {
    $this->db->where('id', $id);
    $this->db->update('producto', $datos);
}




//modificar productos
 public function obtenerProducto($id_producto) {
    $this->db->where('id_producto', $id_producto);
    $query = $this->db->get('producto');
    return $query->row_array(); 
}


public function modificarProducto($id_producto, $nombre, $descripcion, $precio, $stock, $imagen) {
    $data = [
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'precio' => $precio,
        'stock' => $stock,
        'imagen' => $imagen
    ];

    $this->db->where('id_producto', $id_producto);
    $this->db->update('producto', $data);
}

// Actualizar producto sin modificar la imagen
public function modificarProductoSinImagen($id_producto, $nombre, $descripcion, $precio, $stock) {
    $data = [
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'precio' => $precio,
        'stock' => $stock
    ];

    $this->db->where('id_producto', $id_producto);
    $this->db->update('producto', $data);
}
public function eliminarProducto($id_producto) {
    // Eliminar el producto por su ID
    $this->db->where('id_producto', $id_producto);
    $this->db->delete('producto');
}


}