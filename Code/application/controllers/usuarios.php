<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library('session');
        $this->load->library('email');
    } 

    public function index()
    {
        $this->load->view('inc/head');
        $this->load->view('loginform');
        $this->load->view('inc/footer');
        $this->load->view('inc/pie');
    }

    public function menu()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('inc/vistaslte/menu');
        $this->load->view('inc/vistaslte/test');
        $this->load->view('inc/vistaslte/footer');
    }
    public function catalogo()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('catalogo');
      
        $this->load->view('inc/vistaslte/footer');
    }
    public function dashboard()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('dashboard');
       
        $this->load->view('inc/vistaslte/footer');
    }


    public function anadir()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('anadirProducto');
        $this->load->view('inc/vistaslte/footer');
    }



    public function transferirsi()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('resultado_transferencia');
       
        $this->load->view('inc/vistaslte/footer');
    }
    public function clientes()
    {
        // Cargar el modelo
        $this->load->model('Usuario_model');
        
        // Obtener los datos de los usuarios
        $data['usuarios'] = $this->Usuario_model->obtener();
    
        // Cargar las vistas
        $this->load->view('inc/vistaslte/head');
        $this->load->view('clientes', $data);
        $this->load->view('inc/vistaslte/footer');
    }
    

    public function validarusuario()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $usuario = $this->Usuario_model->validar($email, $password);

        if ($usuario)
        {
            // Usuario válido
            $this->session->set_userdata('id', $usuario->id);
            $this->session->set_userdata('nombre', $usuario->nombre);
            $this->session->set_userdata('apellido_Paterno', $usuario->apellido_Paterno);
            $this->session->set_userdata('email', $usuario->email);
            $this->session->set_userdata('rol', $usuario->rol);

            redirect('usuarios/dashboard', 'refresh');
        }
        else
        {
            redirect('usuarios/index', 'refresh');
        }
    }

    public function registrar()
    {
        $nombre = $this->input->post('nombre');
        $apellido_Paterno = $this->input->post('apellido_Paterno');
        $apellido_Materno = $this->input->post('apellido_Materno');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $errores = [];

        if (!$this->validar_nombre($nombre)) {
            $errores['nombre'] = 'Nombre no válido.';
        }
        if (!$this->validar_nombre($apellido_Paterno)) {
            $errores['apellido_Paterno'] = 'Apellido no válido.';
        }
        if (!$this->validar_nombre($apellido_Materno)) {
            $errores['apellido_Materno'] = 'Apellido no válido.';
        }
        if ($this->Usuario_model->existe_email($email)) {
            $errores['email'] = 'Email ya registrado.';
        }
        
        if (empty($errores)) {
            if ($this->Usuario_model->registrar($nombre, $apellido_Paterno, $apellido_Materno, $email, $password)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Hubo un problema al registrar el usuario. Por favor, intenta nuevamente.']);
            }
        } else {
            echo json_encode(['success' => false, 'errores' => $errores]);
        }
    }

    public function validar_nombre($nombre)
    {
        return preg_match('/^[a-zA-Z\s]+$/', $nombre);
    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index', 'refresh');
    }

    

   
    

    public function transferir() {
        
        $idCuentaOrigen = $this->input->post('idCuentaOrigen');
        $idCuentaDestino = $this->input->post('idCuentaDestino');
        $cantidad = $this->input->post('cantidad');
    
        
        $resultado = $this->usuario_model->transferir($idCuentaOrigen, $idCuentaDestino, $cantidad);
    
        
        if ($resultado) {
            $data['mensaje'] = 'Transferencia realizada con éxito.';
        } else {
            $data['mensaje'] = 'Error en la transferencia. Inténtelo de nuevo.';
        }
    
        
        $this->load->view('resultado_transferencia', $data);
        
    }
    
    




    public function agregar() {
        $nombre = $this->input->post('nombreProducto');
    $descripcion = $this->input->post('descripcionProducto');
    $precio = $this->input->post('precioProducto');
    $stock = $this->input->post('stockProducto');
    $imagen = $this->subirImagen();  

    if ($imagen === false) {
        echo "No se pudo subir la imagen. Intenta nuevamente.";
        return;
    }

    $data = [
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'precio' => $precio,
        'stock' => $stock,
        'imagen' => $imagen 
    ];

    $this->usuario_model->guardar($data);

   
    redirect('usuarios/anadir'); 
    }
    private function subirImagen() {
        $config['upload_path'] = './uploads/';  
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // Tamaño máximo de archivo en KB (2 MB)
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('imagenProducto')) {
           
            $nombreImagen = $this->upload->data('file_name');
            echo "Imagen subida correctamente: " . $nombreImagen; 
            return $nombreImagen;
        } else {
           
            $error = $this->upload->display_errors();
            echo "Error al subir la imagen: " . $error;
            return false;
        }
    }
    




    }


    
