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

<style >
	.divider {
  height: 1px;
  width:100%;
  display:block; /* for use on default inline elements like span */
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
</style>
<body>


 <div class="row" >
 	<div class="col-md-2"></div>
			<div class="col-md-8" style="margin-left:10px; margin-right: 10px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Módulo de Reservas</strong> <span class="text-muted">Intregación de Sistemas y Electrónica.</span>
					</div>
				<div class="panel-body">
				<b>Correo de Reservación:</b> 	<?php if(isset($email)): ?>

							    <?php echo $email; ?>

							<?php endif ?>
 <br style="margin-bottom: 10px" >
				<div class="divider" style="margin-bottom: 10px"></div>
						

						<form class="form-horizontal" role="form" action="<?php echo base_url("index.php/Welcome/registro");?>" method="post">
						  <div class="form-group">
						    <label for="ejemplo_email_3" class="col-md-12">Cantidad de Entradas a Reservar <b>Máximo 3</b></label>
						    <div class="col-md-12">
						      <input type="number" maxlength="1" class="form-control" id="cantidad" name="cantidad" required="true" min="1" max="3"
						             placeholder="cantidad">
						             <?php if(isset($email)): ?>
						      <input type="hidden" name="email" value="<?php echo $email; ?>">
									 <?php endif ?>
						    </div>
						  </div>

						   <div class="form-group">
						    <div class="col-md-12">
						      <button type="submit" class="btn btn-default">Reservar</button>
						    </div>
						  </div>

						</form>

		
						

						 <?php if(isset($mensaje)): ?>

							    <?php echo $mensaje; ?>

							<?php endif ?>

<div style="margin-top: 20px"></div>
					
						><a href="<?php echo base_url('index.php/Welcome/cerrar'); ?>">SALIR DEL SISTEMA</a>
						</div><!-- /panel-body -->
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
	<div class="col-md-2"></div>
</div>

<div class="footer">
          <div class="row" style="text-align:center">
                <div class="col-lg-12">

                    <p style="font-size: 16px; color: black" >Desarrollado por <a style="color: darkblue" href="http://www.softupcloud.com">SoftupCloud</a></em></p>
                </div>
            </div>
</div>



</body>
</html>