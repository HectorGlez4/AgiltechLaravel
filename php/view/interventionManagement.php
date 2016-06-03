<!DOCTYPE html>
<html>
	<?php 
		$pageTitle = "Intervention Management";
		include_once("inc/head.php"); 
	?>
<body>
	<?php include_once("inc/header.php"); ?>

	<div class="container">
		<h1>Intervention 1 <small>Status: Working <span class="glyphicon glyphicon-wrench"></span></small> </h1>
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>To do:</h3>
				<div class="list-group" style="font-size:1.75em;">
					<button class="list-group-item list-group-item-danger" href="#TextualTaskModal" data-toggle="modal">GPS signal not optimal</button>
					<button class="list-group-item list-group-item-danger" href="#PupitreConfigurationModal" data-toggle="modal">Connexion Pupitre</button>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body ">
				<div class="row">
					<div class="col-xs-12">
						<div class="col-xs-6" style="font-size:2em;">
							Client: KEOLIS <br>  Place: NICE
						</div>
						<div class="col-xs-6 " style="font-size:2em;">
							Technician: LC, T1, T2 <br>  Type: Maintenance
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body" style="font-size:1.75em;">
				<div class="row" >
					<div class="col-xs-6"><h1>Vehicule</h1></div>
					<div class="col-xs-6 text-right" style="margin-top:10px;"><button href="#verificationModal" data-toggle="modal" class="btn btn-lg btn-warning">Verification</button></div>
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-condensed">
							<tbody >
								<tr>
									<td>Registration: XX-XXX-XXX</td>
									<td rowspan="2" class="text-center"> Circulation Date: <br> 00/00/0000</td>
								</tr>
								<tr><td>Brand: Brand Name</td></tr>
								<tr>
									<td>Model: Model 1</td>
									<td rowspan="2" class="text-center"> Kilometers: <br> 80.000 KM</td>
								</tr>
								<tr><td>ID Vehicule: XXXXXXXXX</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body" style="font-size:1.75em;">
				<div class="row" >
					<div class="col-xs-6"><h1>Observations</h1></div>
					<div class="col-xs-6 text-right" style="margin-top:10px;padding-right:1em;color:steelblue;font-size:2em;"><a onclick="loadObservations()" href="#observationsModal" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></a></div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6">
						<h1>Documents</h1>
					</div>
					<div class="col-xs-6 text-right" style="margin-top:10px;padding-right:1em;color:steelblue;font-size:2em;"><a href="#documentModal" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span></a></div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-responsive table-striped" >
							<tr class="rowlink">
								<td><a href="/agiltech/assets/documents/document1.pdf" target="_blank">
									Shémas de cablage LER Transdev Dauphiné Autocars SCANIA
								</a></td>
							</tr>
							<tr class="rowlink">
								<td><a href="/agiltech/assets/documents/FXT009.pdf" target="_blank">
									Manual Pupitre FTX009
								</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="btn-group btn-group-justified" role="group" >
  			<div class="btn-group" role="group">
			    <a  type="button" class="btn btn-lg btn-default btn-grp" href="interventions.php">Close</a>
			</div>
			<div class="btn-group" role="group">
			    <a type="button" class="btn btn-lg btn-primary btn-grp" href="vehiculeConfiguration.php">Configuration</a>
			</div>
			<div class="btn-group" role="group">
			    <button type="button" class="btn btn-lg btn-success btn-grp">Finish Intervention</button>
		  </div>
		</div>
	</div>

	<?php include_once("inc/footer.php"); ?>
	<?php include_once("modals/PeripheriqueTaskModal.php"); ?>
	<?php include_once("modals/TextualTaskModal.php");?>
	<?php include_once("modals/verificationModal.php");?>
	<?php include_once("modals/observationsModal.php");?>
	<?php include_once("modals/documentModal.php");?>
	<script src="../../js/observations.js"></script>
	<script src="../../js/documents.js"></script>
</body>
</html>