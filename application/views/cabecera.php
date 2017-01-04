<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3 bg-primary">
            <img  src="http://www.ausiasmarch.net/sites/default/files/logo_blanco_0.png"/>
        </div>
        <div class="col-md-6">
            <h2 class="text-primary text-center"><?php echo $title; ?></h2>
        </div>
        <div class="col-md-3">
            <h5 class="text-primary">
                <?php echo $this->ion_auth->user()->row()->last_name,', '.$this->ion_auth->user()->row()->first_name; ?>
                <a href='<?php echo site_url();?>/auth/logout' >
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                </a>
            </h5>
        </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="<?php echo $active=='home'?'active':'';?>"><a href="<?php echo site_url(); ?>/pedido">Home</a></li>
                    <li role="presentation" class="<?php echo $active=='cliente'?'active':'';?>"><a href="<?php echo site_url(); ?>/cliente/add">Clientes</a></li>
                    <li role="presentation" class=""><a href="./articulo/add">Artículos</a></li>
                    <li role="presentation" class=""><a href="pedido/add">Pedidos</a></li>
                    <li role="presentation" class=""><a href="empleado/add">Empleados</a></li>
                </ul>
            </div>
        </nav>    
    </div>


