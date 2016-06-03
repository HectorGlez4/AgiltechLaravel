<!DOCTYPE html>
<html>
	<?php 
		$pageTitle = "Interventions";
		include_once("inc/head.php"); 
	?>
<body>
	<?php include_once("inc/header.php"); ?>

	<div class="container">
		<h1>New Intervention</h1>
		
		<div class="panel panel-default">
			<form>
				<div class="panel-body">
					<div class ="row">
						<div class="col-sm-6 col-sm-push-6">
							<div class="col-xs-12">
								<a href="#TechnicianManagerModal" data-toggle="modal">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title">Tecnichian:</h3>
										</div>
										<div class="panel-body text-center">
											<p style="font-size:1.2em;">LC</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<div class="checkbox form-group col-xs-12 text-center">
							    <label>
							      	<input type="checkbox" checked="checked"> Today <label>00/00/0000</label>
							    </label>
							</div>
							<div class="form-group col-xs-12">

				            	<label for="inClient">Client</label>
				            	<input type="text" class="form-control" id="inClient" placeholder="Client">
				            </div>
						</div>
					</div>
					<div class ="row">
						<div class="col-sm-6">
							<div class="form-group">
				            	
				            	<div class="col-xs-10">
				            		<label for="inPlace">Place</label>
				            		<input type="text" class="form-control" id="inPlace" placeholder="Place">
				            	</div>
				            	<div class="col-xs-2" >
				            		<br/>
				            		<span class="glyphicon glyphicon-plus text-center" style="color:steelblue;"> New</span>
				            	</div>
				            	
				            </div>
						</div>
						<div class="col-xs-6"></div>
						<div class="col-sm-6">
							<div class="form-group col-xs-12">
				            	<label for="inTypeIntervention">Type</label>
				            	<select type="text" class="form-control" name="inTypeIntervention" id="inTypeIntervention" onchange="typeChange()">
				            		<option>Select Type</option>
				            		<option>Installation</option>
				            		<option>Maintenance</option>
				            		<option>Rotation</option>
				            		<option>Desinstallation</option>
				            	</select>
				            </div>
						</div>
					</div>
			  	</div>
		  	</form>
		</div>

		<div id="panelInstallation" class="typeIntervention panel panel-default hidden">
			<div class="panel-body ">
				<h2>New Installation <small>Vehicule</small></h2>
				<br/>
				<div class="container">
					<div class="row">
						<div class="col-xs-11">
							<form class="form-inline">
								<div class="form-group">
								    <input type="text" class="form-control" id="vehicule" placeholder="Vehicule">
								</div>
								<button type="submit" class="btn btn-primary">Filter</button>
							</form>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-11">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead >
										<tr>
											<th>ID</th>
											<th>Registration</th>
											<th>ID Vehicule</th>
											<th>Brand</th>
											<th>Model</th>
										</tr>
									</thead>
									<tbody id="tbVehiculesInstallation" data-link="row" class="rowlink">
									</tbody>
								</table>
							</div>
							<div id="vehiculesFooter" class="row">
								<div class="col-sm-6">
									<ul class="pagination">
									  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
									</ul>
								</div>
								<div class="col-sm-6">
									<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#newVehiculeModal">New Vehicule</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="panelDesinstallation" class="typeIntervention panel panel-default hidden">
			<div class="panel-body ">
				<h2>New Desinstallation <small>Vehicule</small></h2>
				<br/>
				<div class="container">
					<div class="row">
						<div class="col-xs-11">
							<form class="form-inline">
								<div class="form-group">
								    <input type="text" class="form-control" id="vehicule" placeholder="Vehicule">
								</div>
								<button type="submit" class="btn btn-primary">Filter</button>
							</form>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-11">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead >
										<tr>
											<th>ID</th>
											<th>Registration</th>
											<th>ID Vehicule</th>
											<th>Brand</th>
											<th>Model</th>
										</tr>
									</thead>
									<tbody id="tbVehiculesDesinstallation" data-link="row" class="rowlink">
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<ul class="pagination">
									  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="panelRotation" class="typeIntervention panel panel-default hidden">
			<div class="panel-body ">
				<h2>New Rotation <small>Vehicule</small></h2>
				<br/>
				<div class="container">
					<div class="row">
						<div class="col-xs-11">
							<form class="form-inline">
								<div class="form-group">
								    <input type="text" class="form-control" id="vehicule" placeholder="Vehicule">
								</div>
								<button type="submit" class="btn btn-primary">Filter</button>
							</form>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-11">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead >
										<tr>
											<th>ID</th>
											<th>Registration</th>
											<th>ID Vehicule</th>
											<th>Brand</th>
											<th>Model</th>
										</tr>
									</thead>
									<tbody id="tbVehiculesRotation" data-link="row" class="rowlink">
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<ul class="pagination">
									  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="panelMaintenance" class="typeIntervention panel panel-default hidden">
			<div class="panel-body ">
				<h2>New Maintenance <small>Vehicule</small></h2>
				<br/>
				<div class="container">
					<div class="row">
						<div class="col-xs-11">
							<form class="form-inline">
								<div class="form-group">
								    <input type="text" class="form-control" id="vehicule" placeholder="Vehicule">
								</div>
								<button type="submit" class="btn btn-primary">Filter</button>
							</form>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-11">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead >
										<tr>
											<th>ID</th>
											<th>Registration</th>
											<th>ID Vehicule</th>
											<th>Brand</th>
											<th>Model</th>
										</tr>
									</thead>
									<tbody id="tbVehiculesMaintenance" data-link="row" class="rowlink">
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<ul class="pagination">
									  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		



	</div>
	<?php include_once("inc/footer.php"); ?>
	<script src="../../js/newIntervention.js"></script>
	<?php include_once("modals/newInstallationModal.php"); ?>
	<?php include_once("modals/newVehiculeModal.php"); ?>
	<?php include_once("modals/newDesinstallationModal.php"); ?>
	<?php include_once("modals/newRotationModal.php"); ?>
	<?php include_once("modals/newMaintenanceModal.php"); ?>
	<?php include_once("modals/TechnicianManagerModal.php"); ?>
</body>
</html>