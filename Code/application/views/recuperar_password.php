<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/style.css'); ?>">
    <title>Recuperar Contraseña</title>
</head>
<body>
    
    <div class="container" id="container">
        <div class="form-container">
            <?php echo form_open('usuarios/enviar_codigo'); ?>
                <h1>Recuperar Contraseña</h1>
                <span>Ingrese su correo electrónico para recibir un código de recuperación.</span>
                <input type="email" name="email" placeholder="Escribe tu email" required>
                <button type="submit" class="btn btn-success">Enviar Código</button>
                <button type="button" onclick="window.location.href='index'">Regresar</button> <!-- Cambia 'index.php' por la página a la que quieras regresar -->
            <?php echo form_close(); ?>
            <?php if ($this->session->flashdata('success')): ?>
                <p class="success"><?php echo $this->session->flashdata('success'); ?></p>
            <?php elseif ($this->session->flashdata('error')): ?>
                <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
            <?php endif; ?>


            
        </div>
    </div>
</body>
</html>


