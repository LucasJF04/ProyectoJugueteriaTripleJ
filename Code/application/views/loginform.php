<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/style.css'); ?>"> <!-- Utiliza base_url() para la ruta correcta -->
     <!-- Asegúrate de que el archivo CSS esté en la misma carpeta o ajusta la ruta -->
    <title>Modern Login Page | AsmrProg</title>
    
</head>


<body>

<div class="container" id="container">
<div class="form-container sign-up">
        <?php echo form_open('usuarios/registrar', ['id' => 'formRegistro']); ?>
            <h1>Crear cuenta</h1>
            
            <div class="social-icons">
                <!-- Icons... -->
            </div>
            <span>Ingrese sus datos</span>
            <div id="errores"></div> <!-- Aquí se mostrarán los mensajes de error -->
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" required>
            <span class="error" id="error-nombre"></span>
            <input type="text" name="apellido_Paterno" id="apellido_Paterno" placeholder="Escribe tu apellido paterno" required>
            <span class="error" id="error-apellido_Paterno"></span>
            <input type="text" name="apellido_Materno" id="apellido_Materno" placeholder="Escribe tu apellido materno" required>
            <span class="error" id="error-apellido_Materno"></span>
            <input type="email" name="email" id="email" placeholder="Escribe tu email" required>
             <span class="error" id="error-email"></span>
            <input type="password" name="password" id="password" placeholder="Escribe tu contraseña" required>
            <span class="error" id="error-password"></span>
            <button type="submit" class="btn btn-success">Registrar</button>
           

        <?php echo form_close(); ?>
        <div id="mensaje"></div> 
        <!-- Aquí se mostrará el mensaje de éxito -->
    
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#formRegistro').submit(function(e) {
            e.preventDefault(); // Prevenir el envío normal del formulario

            $.ajax({
                url: '<?= site_url('usuarios/registrar'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    // Ocultar errores previos
                    $('.error').text('').hide();

                    if (response.success) {
                        $('#mensaje').text('Registro exitoso').show();

                        // Limpiar los campos del formulario solo si el registro fue exitoso
                        $('#formRegistro')[0].reset();

                        // Aquí puedes redirigir o realizar otra acción si es necesario
                    } else {
                        // Mostrar los errores de validación en los flotantes
                        for (const [campo, mensaje] of Object.entries(response.errores)) {
                            $('#error-' + campo).text(mensaje).show(); // Mostrar el mensaje en el flotante
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud:', error);
                }
            });
        });
    });
</script>



        <div class="form-container sign-in">
            <?php echo form_open_multipart("usuarios/validarusuario"); ?>
                <h1>Iniciar sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Ingresa tus datos</span>
                <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
                <input type="text" class="form-control" name="email" placeholder="Escribe email" required>
                <input type="password" class="form-control" name="password" placeholder="Escribe password" required>
                <a href="<?php echo site_url('usuarios/recuperar'); ?>">¿Olvidaste tu contraseña?</a>
                <button type="submit" class="btn btn-success">Iniciar</button>
            <?php echo form_close(); ?>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido!</h1>
                    <p>Ingrese sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Ya tengo una!</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola de nuevo!</h1>
                    <p>Regístrese con sus datos personales </p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('bootstrap/js/script.js'); ?>"></script>
    <script src="script.js"></script>
</body>

</html>
