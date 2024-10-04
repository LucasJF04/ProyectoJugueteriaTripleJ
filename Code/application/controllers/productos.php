<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('productos_model'); // Cargar el modelo
    }
    
    public function recuperar() {
        $data['productos'] = $this->productos_model->obtenerProductos(); // Cambiado el nombre del método
        $this->load->view('gestionProducto', $data);
    
        // Depuración
        var_dump($data['productos']);
        exit; // Detiene la ejecución para ver los resultados
    
        // Carga la vista solo si hay productos
        if (!empty($data['productos'])) {
            $this->load->view('gestionProductos', $data);
        } else {
            // Carga una vista si no hay productos
            $this->load->view('no_productos'); 
        }
    }
    
    public function gestion() {
        $this->load->view('inc/vistaslte/head');
        $data['productos'] = $this->productos_model->obtenerProductos();
        $this->load->view('gestionProductos', $data);
        $this->load->view('inc/vistaslte/footer');
        $this->load->view('inc/vistaslte/menu');
    }
    
    public function catalogo()
    {
        $this->load->view('inc/vistaslte/head');
        $data['productos'] = $this->productos_model->obtenerProductos();
        $this->load->view('catalogo', $data);
        $this->load->view('inc/vistaslte/footer');
        $this->load->view('inc/vistaslte/menu');
    }

    public function index()
    {
        $this->load->view('inc/head');
        $this->load->view('loginform');
        $this->load->view('inc/footer');
        $this->load->view('inc/pie');
    }
    public function anadir()
    
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('anadirProducto');

        $this->load->view('inc/vistaslte/footer');
        $this->load->view('inc/vistaslte/menu');
        
    }
   

    public function carrito()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('inc/vistaslte/menu');
        $data['productos'] = $this->productos_model->obtenerProductos();
        $this->load->view('carrito', $data);
        $this->load->view('inc/vistaslte/footer');
       
    }

    public function Gventas()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('inc/vistaslte/menu');
        $this->load->view('ventas');
        $this->load->view('inc/vistaslte/footer');
       
    }

    public function agregar()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('imagenProducto')) {
            $file_data = $this->upload->data();
            $datos_producto = array(
                'nombre' => $this->input->post('nombreProducto'),
                'descripcion' => $this->input->post('descripcionProducto'),
                'precio' => $this->input->post('precioProducto'),
                'stock' => $this->input->post('stockProducto'),
                'imagen' => $file_data['file_name']
            );

            $this->productos_model->agregarProducto($datos_producto);
            redirect('productos/catalogo');
        } else {
            echo $this->upload->display_errors();
        }
    }


    
    
    public function buscarProductos() {
        $termino = $this->input->post('termino'); 
        
        
        $productos = $this->Producto_model->buscar($termino);
        
       
        echo json_encode($productos);
    }

   
    public function obtenerProducto($id) {
        $producto = $this->Producto_model->obtenerPorId($id);
        echo json_encode($producto);
    }

    
    public function actualizarProducto() {
        $id = $this->input->post('id');
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'stock' => $this->input->post('stock')
        ];

        
        $this->Producto_model->actualizar($id, $data);
        echo json_encode(['status' => 'success']);
    }















    public function buscar() {
        $criterio = $this->input->post('criterio');
        $productos = $this->productos_model->buscarProducto($criterio);
        
        echo json_encode($productos);
    }
    
    // Función para actualizar el producto
    public function editar() {
        $id = $this->input->post('productoId');
        $datos = array(
            'nombre' => $this->input->post('nombreProducto'),
            'descripcion' => $this->input->post('descripcionProducto'),
            'precio' => $this->input->post('precioProducto'),
            'stock' => $this->input->post('stockProducto')
        );
        $this->productos_model->actualizarProducto($id, $datos);
        redirect('productos');
    }



    public function detalle($id) {
        $producto = $this->productos_model->obtenerProductoPorId($id);
        echo json_encode($producto);
    }


// En tu controlador productos.php



    
}
