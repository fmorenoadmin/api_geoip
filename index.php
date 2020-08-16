<?php 
	session_start();
	$rut='./';
	$acti='index.php';
	require_once($rut.'constant.php');
	/**
	 * API to geolocation por Frank Moreno Alburqueque
	 */
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= TIT; ?></title>
	<meta name="description" content="Copyright © 2019-<?= YEAR; ?> Desarrollado por: Frank Moreno Alburqueque Todos los derechos reservados.
	    Tipo de Licencia: Solo uso personal
	    Desarrollado por: Moreno Alburqueque Frank Martin
	    Página web:       <?= FMMA; ?>
	    Tema:	  		  <?= TIPO; ?>">
	<meta name="author" content="Moreno Alburqueque Frank Martin, admin@frankmorenoalburqueque.com">
	<meta name="urlauthor" content="<?= FMMA; ?>">
	<meta name="copyright" content="Copyright © 2019-<?= YEAR; ?> Frank Martin Moreno Alburqueque">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="og:title" content="API Reniec | Frank Martion Moreno Alburqueque | WebMaster - Programador Web">
	<meta name="og:image" content="<?= FMMA; ?>/images/logo.png">
	<meta name="og:site_name" content="<?= TIPO; ?>">
	<meta name="og:description" content="Copyright © 2019-<?= YEAR; ?> Desarrollado por: Frank Moreno Alburqueque Todos los derechos reservados.
	    Tipo de Licencia: Solo uso personal
	    Desarrollado por: Moreno Alburqueque Frank Martin
	    Página web:       <?= FMMA; ?>
	    Tema:	  		  <?= TIPO; ?>">
	<link type="text/css" rel="stylesheet" href="https://cdn.embedly.com/css/social.e025eaf3.css">
	<link rel="icon" href="<?= FMMA; ?>/images/user.ico" sizes="32x32">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<?php
		$inf = null;

		require_once($rut.DIRACT.$acti);
		$inf = index($rut);
		$geo = $inf->geo;
	?>
</head>
<body style="background-color: #000000;">
	<hr>
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 text-center">
					<img width="150px" src="<?= FMMA; ?>images/logo.png" >
				</div>
				<div class="col-sm-6 text-center">
					<h1 class="text-white"><?= TIPO; ?></h1>
					<br>
					<p class="text-white">IP por Defecto: <code>190.236.211.199</code> para <code>::1 - 127.0.0.1</code></p>
				</div>
				<div class="col-sm-3 text-center">
					<img width="150px" src="<?= FMMA; ?>images/logo.png" >
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label class="form-label">continent:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->continent; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">alpha2:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->alpha2; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">alpha3:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->alpha3; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">country_code:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->country_code; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">international_prefix:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->international_prefix; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">ioc:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->ioc; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">gec:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->gec; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">name:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->name; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label class="form-label">national_prefix:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->national_prefix; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">number:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->number; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">region:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->region; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">subregion:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->subregion; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">world_region:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->world_region; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">un_locode:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->un_locode; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">nationality:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->nationality; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">postal_code:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->postal_code; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label class="form-label">latitude:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->latitude; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">latitude_dec:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->latitude_dec; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">longitude:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->longitude; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">longitude_dec:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->longitude_dec; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">max_latitude:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->max_latitude; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">max_longitude	:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->max_longitude	; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">min_latitude:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->min_latitude; ?>">
						</div>
						<div class="form-group">
							<label class="form-label">min_longitude:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $geo->min_longitude; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 pt-4 pb-4 mb-4">
				<div class="card">
					<div class="card-body row">
						<div class="col-sm-6 form-group">
							<label class="form-label">currency_code:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->currency_code; ?>">
						</div>
						<div class="col-sm-6 form-group">
							<label class="form-label">start_of_week:</label>
							<input type="text" class="form-control" readonly="readonly" value="<?= $inf->start_of_week; ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
</body>
</html>