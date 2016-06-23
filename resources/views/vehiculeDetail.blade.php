@extends('layouts.main')

@section('content')
	<div class="container">
		<h1>Vehicule Detail</small> </h1>
		
		<div class="panel panel-default">
			<div class="panel-body" style="font-size:1.75em;">
				<div class="row">
					<div class="col-xs-6" style="font-size:2em;">
							<h1>Vehicule: {{{$vehicule->VHC_ID}}}</h1> 
					</div>
				</div>
				<br>			
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-condensed">
							<tbody >
								<tr>
									<td>Client: {{{$vehicule->CLI_Name}}}</td>
									<td>ID Vehicule: {{{$vehicule->VHC_IDV}}} </td>
									
								</tr>
								<tr>
									<td>Registration: {{{$vehicule->VHC_Registration}}}</td>
									<td>Brand: {{{$vehicule->VHMA_Name}}}</td>
								</tr>
								<tr >
									<td> Circulation Date: {{{$vehicule->VHC_CirrculationDate}}}</td>
									<td>Model: {{{$vehicule->VHMO_Name}}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
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
			    <a  type="button" class="btn btn-lg btn-default btn-grp">Close</a>
			</div>
			<div class="btn-group" role="group">
			    <a type="button" class="btn btn-lg btn-primary btn-grp" href="/vehicule/{{{$vehicule->VHC_ID}}}/configuration">Configuration</a>
			</div>
		</div>
	</div>

@stop