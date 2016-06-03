<!DOCTYPE html>
<html>
	<?php 
		$pageTitle = "Vehicule Configuration";
		include_once("inc/head.php"); 
	?>
<body>
	<?php include_once("inc/header.php"); ?>

	<div class="container">
		<h1>Vehicule XX-XXX-XX<small> Model 1</small> </h1>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6"><h1>Modem </h1></div>
					<div class="col-xs-6 text-right"><span class="glyphicon glyphicon-plus" style="color:steelblue;font-size:2.5em; margin-top:10px"></span></div>
				</div>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-bordered table-hover table-striped table-condensed">
							<thead><tr>
								<th>Model</th>
								<th>Status</th>
								<th>Port</th>
								<th>Actions</th>
							</tr></thead>
							<tbody>
								<tr>
									<td>FTX009</td>
									<td><select class="form-control">
										<option>OK</option>
										<option>KO</option>
										<option>Not Installed</option>
									</select></td>
									<td>N/A</td>
									<td>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Edit'>
												<button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button>
											</p>
										</div>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>
												<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button>
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6"><h1>Peripherals</h1></div>
					<div class="col-xs-6 text-right"><a href="#newPeripheriqueModal" data-toggle="modal"><span class="glyphicon glyphicon-plus" style="color:steelblue;font-size:2.5em; margin-top:10px"></span></a></div>
				</div>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-bordered table-hover table-striped table-condensed">
							<thead><tr>
								<th>Model</th>
								<th>Status</th>
								<th>Port</th>
								<th>Actions</th>
							</tr></thead>
							<tbody>
								<tr>
									<td>Pupitre ERIC+</td>
									<td><select class="form-control">
										<option>OK</option>
										<option>KO</option>
										<option>Not Installed</option>
									</select></td>
									<td>4</td>
									<td>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Edit'>
												<button class='btn btn-primary btn-xs' href="#editPeripheriqueModal" data-toggle="modal" data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button>
											</p>
										</div>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>
												<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button>
											</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>Ecran Bandeau Interieur</td>
									<td><select class="form-control">
										<option>OK</option>
										<option>KO</option>
										<option>Not Installed</option>
									</select></td>
									<td>2</td>
									<td>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Edit'>
												<button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button>
											</p>
										</div>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>
												<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button>
											</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>RFID Lecteur Carte</td>
									<td><select class="form-control">
										<option>OK</option>
										<option>KO</option>
										<option>Not Installed</option>
									</select></td>
									<td>3</td>
									<td>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Edit'>
												<button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button>
											</p>
										</div>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>
												<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button>
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6"><h1>Input / Output </h1></div>
					<div class="col-xs-6 text-right"><span class="glyphicon glyphicon-plus" style="color:steelblue;font-size:2.5em; margin-top:10px"></span></div>
				</div>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-bordered table-hover table-striped table-condensed">
							<thead><tr>
								<th class="col-xs-2">Model</th>
								<th class="col-sm-2">Status</th>
								<th class="col-sm-2">Port</th>
								<th class="col-sm-2">Actions</th>
							</tr></thead>
							<tbody>
								<tr>
									<td>Bouton Dtresse LED</td>
									<td><select class="form-control">
										<option>OK</option>
										<option>KO</option>
										<option>Not Installed</option>
									</select></td>
									<td>7</td>
									<td>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Edit'>
												<button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button>
											</p>
										</div>
										<div class='col-xs-6'>
											<p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>
												<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button>
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="btn-group btn-group-justified" role="group" ">
			<div class="btn-group"><a href="#" class="btn btn-lg btn-default btn-grp">New Textual Task</a></div>
			<div class="btn-group"><a href="interventionManagement.php" class="btn btn-lg btn-primary btn-grp">Return to Intervention</a></div>
		</div>
	</div>

	<?php include_once("inc/footer.php"); ?>
	<?php include_once("modals/editPeripheriqueModal.php"); ?>
	<?php include_once("modals/newPeripheriqueModal.php"); ?>
	<script src="../../js/vehiculeConfiguration.js"></script>
</body>
</html>