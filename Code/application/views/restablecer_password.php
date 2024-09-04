<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/style.css'); ?>">
    <title>Restablecer Contraseña</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container">
            <?php echo form_open('usuarios/actualizar_password'); ?>
                <h1>Restablecer Contraseña</h1>
                <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
                <input type="password" name="nueva_password" placeholder="Escribe nueva contraseña" required>
                <button type="submit" class="btn btn-success">Actualizar Contraseña</button>
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

