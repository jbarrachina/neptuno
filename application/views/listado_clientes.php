<div class="list-clients">
<?php foreach ($clientes as $cliente): ?>
        <div class="row">
        <div class="col-md-4">
            <?php echo $cliente->nombreCli; ?>
        </div>
        <div class="col-md-4">
            <?php echo $cliente->direccion; ?>
        </div>
        <div class="col-md-2">
            <a href="<?php echo 'pedido/email/'.$cliente->idCliente; ?>">enviar email</a>
        </div>    
        <div class="col-md-2">
            <?php if ($this->ion_auth->in_group('admin')===TRUE) {?>
            <a href="<?php echo 'pedido/cliente/'.$cliente->idCliente; ?>">pedidos</a>
            <?php } ?>
        </div>
    </div>
<?php endforeach; ?>  
</div>

<div class="num-pages" >
    <?php echo $this->pagination->create_links() ?>
</div>  
