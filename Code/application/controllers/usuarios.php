<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/validator.php'; 
use validator as v; 

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

    public function validarusuario()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $usuario = $this->Usuario_model->validar($email, $password);
       

        if ($usuario)
        {
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
    
        // Crear una instancia de Validador
        $validador = new Validador();
    
        // Validar los campos
        $validador->validarNombre($nombre);
        $validador->validarApellido($apellido_Paterno, 'apellido_Paterno');
        $validador->validarApellido($apellido_Materno, 'apellido_Materno');
        $validador->validarEmail($email);
        $validador->validarPassword($password);
    
        // Obtener los errores
        $errores = $validador->obtenerErrores();
    
        if ($validador->hayErrores()) {
            // Retornar los errores
            echo json_encode(['success' => false, 'errores' => $errores]);
        } else {
            // Aquí puedes continuar con el registro del usuario
            $this->load->model('Usuario_model'); // Asegúrate de cargar tu modelo
    
            // Intentar registrar al usuario
            $registroExitoso = $this->Usuario_model->registrar($nombre, $apellido_Paterno, $apellido_Materno, $email, $password);
    
            if ($registroExitoso) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'errores' => ['database' => 'No se pudo crear la cuenta.']]);
            }
        }
    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index', 'refresh');
    }

    public function dashboard()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('inc/vistaslte/menu');
        $this->load->view('dashboard');
        $this->load->view('inc/vistaslte/footer');
    }

    public function clientes()
    {
        $data['usuarios'] = $this->Usuario_model->obtener_todos();  // Cambiar a obtener_todos()
        $this->load->view('inc/vistaslte/head');
        $this->load->view('clientes', $data);
        $this->load->view('inc/vistaslte/footer');
        $this->load->view('inc/vistaslte/menu');
    }
    

    
    public function editar($id)
{
    $data['infocliente'] = $this->usuario_model->recuperarcliente($id);

    $this->load->view('inc/vistaslte/head');
    $this->load->view('formulariomodificar', $data);
    $this->load->view('inc/vistaslte/footer');
    $this->load->view('inc/vistaslte/menu');
}

public function modificarbd() {
    $id = $this->input->post('id');
    $data = array(
        'nombre' => $this->input->post('nombre'),
        'apellido_Paterno' => $this->input->post('apellido_Paterno'),
        'apellido_Materno' => $this->input->post('apellido_Materno'),
        'email' => $this->input->post('email'),
        'rol' => $this->input->post('rol')
    );

    // Llamar al modelo para actualizar el usuario
    $this->load->model('usuario_model');
    $this->usuario_model->actualizar_usuario($id, $data);

    // Redirigir o devolver una respuesta
    echo json_encode(['success' => 'Usuario actualizado correctamente']);
}
 
   public function getUsuario() {
    $id = $this->input->get('id');
    $this->load->model('usuario_model');
    $usuario = $this->usuario_model->obtener_usuario_por_id($id);
    
    if ($usuario) {
        echo json_encode($usuario);
    } else {
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
}

    
    

    public function actualizar()
    {
        $id = $this->input->post('id');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_Paterno' => $this->input->post('apellido_Paterno'),
            'apellido_Materno' => $this->input->post('apellido_Materno'),
            'email' => $this->input->post('email'),
            'rol' => $this->input->post('rol')
        );
    
        $this->usuario_model->actualizar($id, $data);
        redirect('usuarios'); // Redirige de nuevo a la lista de usuarios
    }
    

    public function reportes()
{
    $data['usuarios'] = $this->Usuario_model->obtener_todos();  // Cambiar a obtener_todos()
    $this->load->view('inc/vistaslte/head');
    $this->load->view('reportes', $data);
    $this->load->view('inc/vistaslte/footer');
    $this->load->view('inc/vistaslte/menu');
}


    public function obtenerDatos($id) {
        $usuario = $this->usuario_model->obtenerPorId($id);
        if ($usuario) {
            echo json_encode($usuario);
        } else {
            echo json_encode(['error' => 'Usuario no encontrado']);
        }
    }
    



public function eliminar($id)
{
    $this->load->model('usuario_model');
    $this->usuario_model->eliminarUsuario($id); // Asegúrate de que este método exista en tu modelo
    redirect('usuarios/clientes'); // Redirige a la lista de usuarios después de eliminar
}







}





















    
