function typeChange()
{
	intType = $("#inTypeIntervention").val();
	
	switch(intType){
		case "Installation":
			toggleHiddenClass();
			$("#panelInstallation").removeClass("hidden");
			loadVehiculesInstallation();
			break;
		case "Desinstallation":
			toggleHiddenClass();
			$("#panelDesinstallation").removeClass("hidden");
			loadVehiculesDesinstallation();
			break;
		case "Rotation":
			toggleHiddenClass();
			$("#panelRotation").removeClass("hidden");
			loadVehiculesRotation();
			break;
		case "Maintenance":
			toggleHiddenClass();
			$("#panelMaintenance").removeClass("hidden");
			loadVehiculesMaintenance();
			break;

	}
}
function toggleHiddenClass()
{
	$(".typeIntervention").removeClass("hidden");
	$(".typeIntervention").addClass("hidden");
}

function loadVehiculesInstallation()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/js/vehicules2.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.vehicules, function(index, vehicule)
		{
			sTable += "<tr id='"+vehicule.registration+"'>";
			sTable += "<td><a href='#newInstallationModal' data-toggle='modal'>"+ vehicule.id +"</td>";
			sTable += "<td>"+ vehicule.registration +"</td>";
			sTable += "<td>"+ vehicule.idVehicule +"</td>";
			sTable += "<td>"+ vehicule.brand +"</td>";
			sTable += "<td>"+ vehicule.model +"</td>";
		});
		$("#tbVehiculesInstallation").html(sTable);
		$("#tbVehicules2").html(sTable);
	
		$("tbody tr").mouseenter(function(event){
			$("#niSubTitle").html(event.currentTarget.id);
		});
	})
}

function loadVehiculesDesinstallation()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/js/vehicules2.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.vehicules, function(index, vehicule)
		{
			sTable += "<tr id='"+vehicule.registration+"'>";
			sTable += "<td><a href='#newDesinstallationModal' data-toggle='modal'>"+ vehicule.id +"</td>";
			sTable += "<td>"+ vehicule.registration +"</td>";
			sTable += "<td>"+ vehicule.idVehicule +"</td>";
			sTable += "<td>"+ vehicule.brand +"</td>";
			sTable += "<td>"+ vehicule.model +"</td>";
		});
		$("#tbVehiculesDesinstallation").html(sTable);
	
		$("tbody tr").mouseenter(function(event){
			$("#niSubTitle").html(event.currentTarget.id);
		});
	})
}

function loadVehiculesRotation()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/js/vehicules2.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.vehicules, function(index, vehicule)
		{
			sTable += "<tr id='"+vehicule.registration+"'>";
			sTable += "<td><a href='#newRotationModal' data-toggle='modal'>"+ vehicule.id +"</td>";
			sTable += "<td>"+ vehicule.registration +"</td>";
			sTable += "<td>"+ vehicule.idVehicule +"</td>";
			sTable += "<td>"+ vehicule.brand +"</td>";
			sTable += "<td>"+ vehicule.model +"</td>";
		});
		$("#tbVehiculesRotation").html(sTable);
		$("#tbVehiculesNewRotation").html(sTable);
	
		$("tbody tr").mouseenter(function(event){
			$("#niSubTitle").html(event.currentTarget.id);
		});
	})
}
function loadVehiculesMaintenance()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/js/vehicules2.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.vehicules, function(index, vehicule)
		{
			sTable += "<tr id='"+vehicule.registration+"'>";
			sTable += "<td><a href='#newMaintenanceModal' data-toggle='modal'>"+ vehicule.id +"</td>";
			sTable += "<td>"+ vehicule.registration +"</td>";
			sTable += "<td>"+ vehicule.idVehicule +"</td>";
			sTable += "<td>"+ vehicule.brand +"</td>";
			sTable += "<td>"+ vehicule.model +"</td>";
		});
		$("#tbVehiculesMaintenance").html(sTable);
	
		$("tbody tr").mouseenter(function(event){
			$("#niSubTitle").html(event.currentTarget.id);
		});
	})
}

function newInstallationModal(registation)
{
	alert(registation);
}

function copyInstallation()
{
	$("#copyInstallation").toggleClass("hidden");
}

function toggleTechnicianManager(event)
{
	
}

function loadTechnicianManager()
{
	$.ajax({
		url: '/agiltech/js/technician.json',
		type: 'POST',
		dataType: 'json'
	}).done(function(data)
	{
		var included = "";
		var notIncluded ="";

		$.each(data.technician, function(index, tech)
		{
			included += "<button class='list-group-item'>"+ tech.name + "</button>";
		});
		$.each(data.technicianni, function(index, tech)
		{
			notIncluded += "<button class='list-group-item'>"+ tech.name + "</button>";
		});
		$("#technicianIncludedList").html(included);
		$("#technicianNotIncludedList").html(notIncluded);
	
		$(".list-group button").click(function(event){
			if(event.currentTarget.className.indexOf("active") > -1)
			{
				event.currentTarget.className = "list-group-item";
			}
			else
			{
				event.currentTarget.className += " active";
			}
		});
	})
}

loadTechnicianManager();