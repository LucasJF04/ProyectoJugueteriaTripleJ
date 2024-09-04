<form action="<?php echo site_url('usuarios/transferir'); ?>" method="post">
    <label for="idCuentaOrigen">Cuenta Origen:</label>
    <input type="text" name="idCuentaOrigen" id="idCuentaOrigen" required>
    
    <label for="idCuentaDestino">Cuenta Destino:</label>
    <input type="text" name="idCuentaDestino" id="idCuentaDestino" required>
    
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad" required>
    
    <input type="submit" value="Transferir">
</form>
