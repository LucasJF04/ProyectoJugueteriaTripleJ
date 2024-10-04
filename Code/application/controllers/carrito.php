
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

public function agregar() {
  $this->load->model('carrito_model');

  $id_producto = $this->input->post('id_producto');
  $cantidad = $this->input->post('cantidad');
  $id_cliente = $this->session->userdata('id_cliente'); // Obtener el cliente loguead

}

  // Datos class Carrito extends CI_Controller {

  public function agregar() {
    $this->load->model('carrito_model');

    // Obtener los datos enviados por AJAX
    $id_producto = $this->input->post('id_producto');
    $cantidad = $this->input->post('cantidad');
    $id_cliente = $this->session->userdata('id_cliente'); // Asegúrate de que el cliente está logueado

    // Verificar si los datos están llegando
    if (empty($id_producto) || empty($cantidad) || empty($id_cliente)) {
      echo json_encode(['status' => 'error', 'message' => 'Datos incompletos']);
      return;
    }

    // Datos para guardar en la tabla carrito
    $data = [
      'id_cliente' => $id_cliente,
      'id_producto' => $id_producto,
      'cantidad' => $cantidad
    ];

    // Llamar al modelo para agregar el producto al carrito
    $this->carrito_model->agregarProducto($data);

    // Respuesta exitosa
    echo json_encode(['status' => 'success']);
  }
}
