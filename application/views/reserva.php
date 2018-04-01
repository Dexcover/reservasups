<!DOCTYPE html>
<html>
<head>
	<title>Reservas Integración Sistemas - Electrónica</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>


 <?php if(isset($mensaje)): ?>

    <?php echo $mensaje; ?>

<?php endif ?>

 <div class="row">
 

<div class="row">


<div class="col-sm-12" style="margin-left:20px">
<div class="panel panel-default">
<div class="panel-heading">
<strong>Estimado Usuario</strong> <span class="text-muted">Intregación de Sistemas y Electrónica te Agradece.</span>
</div>
<div class="panel-body">
Puede imprimir su comprobante que valida su correcta reserva <a href="<?php echo base_url('index.php/Welcome/pdf'); ?>">Aqui</a> <br>
<b>Correo de Reservación:</b>  <?php if(isset($email)): ?>

    <?php echo $email; ?>

<?php endif ?>

<br>
<a href="<?php echo base_url('index.php/Welcome/cerrar'); ?>">SALIR</a>
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div>



</body>
</html>