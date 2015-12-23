<!DOCTYPE html>
<html lang="es">
	<head>
	    <!-- Google fonts open Sans	 -->
		<!-- link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Roboto+Slab' rel='stylesheet' type='text/css'-->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MAXRICO</title>
		<link href="<?php echo base_url("bootstrap/img/favicon.ico"); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<!-- Bootstrap -->
		<link href="<?php echo base_url() . 'bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url() . 'bootstrap/css/custom.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url() . 'bootstrap/css/jquery-ui-1.8.18.custom.css'; ?>" rel="stylesheet"/>		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php echo base_url() . 'bootstrap/Logo_MaxRico.jpg'; ?>" alt="MAXRICO" WIDTH=80 HEIGHT=80>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro Informaci&oacute;n <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Productos</li>
                <li><a href="<?php echo base_url() . 'productos/index/x'; ?>">Adicionar Productos</a></li>
                <li><a href="<?php echo base_url() . 'productos/lista'; ?>">Lista Productos</a></li>
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Proveedores</li>
                <li><a href="<?php echo base_url() . 'proveedores/index/x'; ?>">Adicionar Proveedores</a></li>
                <li><a href="<?php echo base_url() . 'proveedores/listaProveedores'; ?>">Lista Proveedores</a></li>
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Clientes</li>
                <li><a href="<?php echo base_url() . 'inicio/cliente/x'; ?>">Adicionar Clientes</a></li>
                <li><a href="<?php echo base_url() . 'inicio/listaClientes'; ?>">Lista Clientes</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Materia Prima</li>
                <li><a href="<?php echo base_url() . 'materiaprima/index/x'; ?>">Adicionar Materia Prima</a></li>
                <li><a href="<?php echo base_url() . 'materiaprima/lista'; ?>">Lista Materia Prima</a></li>
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Producto Terminado</li>
                <li><a href="<?php echo base_url() . 'productoterminado/index/x'; ?>">Adicionar Producto Terminado</a></li>
                <li><a href="<?php echo base_url() . 'productoterminado/lista'; ?>">Lista Producto Terminado</a></li>
              </ul>
            </li>

			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Facturación <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() . 'factura/index/x'; ?>">Elaborar factura</a></li>
                <li><a href="<?php echo base_url() . 'factura/lista'; ?>">Ver facturas</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
		<!--	<li><a href="<?php echo base_url() . 'runner'; ?>" target="_blank">Reportes</a></li> -->
		  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() . 'inicio/reporte/x'; ?>">Reporte Clientes</a></li>
                <li><a href="<?php echo base_url() . 'materiaprima/reporte/x'; ?>">Reporte Materia Prima</a></li>
				<li><a href="<?php echo base_url() . 'productoterminado/reporte/x'; ?>">Reporte Productos Terminados</a></li>
				<li><a href="<?php echo base_url() . 'factura/reporte/x'; ?>">Totales ventas por producto</a></li>
				<li><a href="<?php echo base_url() . 'runner'; ?>" target="_blank">REPORTES</a></li>
              </ul>
            </li>
			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>