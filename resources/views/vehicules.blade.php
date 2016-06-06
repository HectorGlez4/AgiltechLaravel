@extends('layouts.main')

@section('content')
	<h1>Vehicules</h1>
		<h3>Filters</h3>
		<form class="form-inline" id="frmFilter">
			<select class="form-control" onchange="loadVehicules()">
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
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Registration</th>
						<th>ID Vehicule</th>
						<th>Brand</th>
						<th>Model</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="tbVehicules">
				</tbody>
			</table>
		</div>
		<div id="vehiculesFooter" class="row hidden">
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
	<script src="{{asset('js/vehicules.js')}}"></script>
	<?php /*include_once("modals/newVehiculeModal.php");*/ ?>
@stop