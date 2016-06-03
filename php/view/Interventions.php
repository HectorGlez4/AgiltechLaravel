<!DOCTYPE html>
<html>
	<?php 
		$pageTitle = "Interventions";
		include_once("inc/head.php"); 
	?>
<body>
	<?php include_once("inc/header.php"); ?>

	<div class="container">
		<h1>Interventions</h1>
		<h3>Filter</h3>
		<form class="form-inline" id="frmFilter">
			<select class="form-control" onchange="loadInterventions()">
				<option>Select Client</option>
				<option>Keolis</option>
				<option>Client1</option>
				<option>Client2</option>
				<option>Client3</option>
				<option>Client4</option>
				<option>Client5</option>
				<option>Client6</option>
				<option>Client7</option>
				<option>Client8</option>
				<option>Client9</option>
			</select>
		 	<div class="form-group">
			    <input type="text" class="form-control" id="vehicule" placeholder="Vehicule">
			</div>
			<button type="submit" class="btn btn-primary">Filter</button>
		</form>
		<br/>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Client</th>
						<th>Vehicule</th>
						<th>Date</th>
						<th>Type</th>
						<th>Technicien</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody id="tbInterventions" data-link="row" class="rowlink">
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
			<div class="col-sm-6">
				<a type="button" class="btn btn-primary btn-lg btn-block" href="newIntervention.php">New Intervention</a>
			</div>
		</div>
	</div>

	<?php include_once("inc/footer.php"); ?>
	<?php include_once("modals/interventionConfirmationModal.php"); ?>
	<script src="../../js/interventions.js"></script>
</body>
</html>