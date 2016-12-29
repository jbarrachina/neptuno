<?php echo $this->session->flashdata('msg'); ?>
<?php echo validation_errors('<div class="alert alert-danger">',"</div>"); ?>

<?php echo form_open('cliente/add', ['class' => 'form-horizontal']); ?>
<?php $label_atr = ['class' => 'col-sm-2 control-label']; ?>
    <div class="form-group">
        <?php echo form_label('Nombre: ', 'nombreCli', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'nombreCli', 'class' => 'form-control', 'placeholder' => 'Nombre del cliente', 'value' => set_value('nombreCli')]); ?>
        </div>
    </div>
    <div class="form-group">
    <?php echo form_label('Código: ', 'codCliente',$label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'codCliente',  'class' => 'form-control', 'placeholder' => 'Código del cliente: 5 Mayúsculas', 'value' => set_value('codCliente')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Direccion: ', 'direccion', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'direccion', 'class' => 'form-control', 'placeholder' => 'Dirección', 'value' => set_value('direccion')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Ciudad: ', 'ciudad', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'ciudad',  'class' => 'form-control', 'placeholder' => 'Ciudad', 'value' => set_value('ciudad')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('CP: ', 'cpostal', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'cpostal', 'class' => 'form-control', 'placeholder' => 'Código Postal', 'value' => set_value('cpostal')]); ?>
        </div>    
    </div>
    <div class="form-group">
        <?php echo form_label('PAÍS (Código): ', 'idPais', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'idPais',  'class' => 'form-control', 'placeholder' => 'País: código 3 Mayúsculas', 'value' => set_value('idPais')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Teléfono: ', 'telefono', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'telefono',  'class' => 'form-control', 'placeholder' => 'Número de teléfono', 'value' => set_value('telefono')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Fax: ', 'fax', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'fax', 'class' => 'form-control', 'placeholder' => 'Número de fax', 'value' => set_value('fax')]); ?>
        </div>
        <div class = "col-md-2">
            <?php echo form_submit('Alta', 'Enviar', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
<?php echo form_close(); ?>
