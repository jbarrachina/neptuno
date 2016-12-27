<?php foreach ($clientes as $cliente): ?>
        <div class="row">
        <div class="col-md-4">
            <?php echo $cliente->nombreCli; ?>
        </div>
        <div class="col-md-4">
            <?php echo $cliente->direccion; ?>
        </div>
        <div class="col-md-4">
            <a href="<?php echo 'pedido/cliente/'.$cliente->idCliente; ?>">pedidos</a>
        </div>
    </div>

<?php endforeach; ?>    