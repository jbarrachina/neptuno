<?php foreach ($pedidos as $pedido): ?>
        <div class="row">
        <div class="col-md-3">
            <?php echo $pedido->idPedido; ?>
        </div>
        <div class="col-md-3">
            <?php echo $pedido->fechaPedido; ?>
        </div>
        <div class="col-md-3">
            <?php echo $pedido->cargosD; ?>
        </div>
        <div class="col-md-3">
            <a href="<?php echo 'pedidos/detalle/'.$pedido->idPedido; ?>">detalle</a>
        </div>
    </div>
<?php endforeach; ?>

