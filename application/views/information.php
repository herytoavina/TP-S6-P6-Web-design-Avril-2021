<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/table/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1" colspan="3" style="text-align: center;">INFO DU JOUR</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($curr_info as $row) { ?>
								<tr class="table100-head">
									<td class="column1" style="text-align: center;"><?= $row['nom'] ?></td>
									<td class="column1" style="text-align: center;"><?= $row['nombre'] ?></td>
									<td class="column1" style="text-align: center;"><?= $row['dateInfo'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1" colspan="2" style="text-align: center;">CUMULER</th>
							
							</tr>
						</thead>
						<tbody>
							<?php foreach ($info as $row) { ?>
								<tr class="table100-head">
									<td class="column1" style="text-align: center;"><?= $row['nom'] ?></td>
									<td class="column1" style="text-align: center;"><?= $row['nombre'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>	


	

<!--===============================================================================================-->	
	<script src="<?php echo base_url() ?>assets/table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/table/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/table/js/main.js"></script>

</body>
</html>