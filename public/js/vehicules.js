function loadVehicules()
{
	URL = "/vehicule/client/";
	URL +=  $("#select-client").val();
	$("#iClient").val($("#select-client").val());
	$("#editClient").val($("#select-client").val());
	//alert(URL);
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json',
	}).done(function(data)
	{
		var sTable = "";

		$.each(data, function(index, vehicule)
		{
			sglyphicon= "";
			//alert(vehicule);
			if(vehicule.VHC_Active)
			{
				sTable += "<tr>";
				sglyphicon = "trash";
			}
			else
			{
				sTable += "<tr class='danger'>";
				sglyphicon = "repeat";
			}

			sTable += "<td><a data-toggle='modal' href='#overviewVehiculeModal' onclick='loadOverview("+vehicule.VHC_ID+")'>"+ vehicule.VHC_ID +"</td>";
			sTable += "<td>"+ vehicule.VHC_Registration +"</td>";
			sTable += "<td>"+ vehicule.VHC_IDV +"</td>";
			sTable += "<td>"+ vehicule.VHMO_Name+"</td>";
			sTable += "<td>"+ vehicule.VHMA_Name +"</td>";
			sTable += "<td class='rowlink-skip'><div class='col-xs-6'><p class='text-center'data-placement='top' data-toggle='tooltip' title='Edit'>"+
						"<button class='btn btn-primary btn-xs' data-title='Edit' onclick='editVehicule("+vehicule.VHC_ID+")'><span class='glyphicon glyphicon-pencil'></span></button></p>"+
						"</div><div class='col-xs-6'><p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>"+
						"<button class='btn btn-danger btn-xs' data-title='Delete' onclick='toggleActive("+vehicule.VHC_ID  +","+ vehicule.VHC_Active+")'><span class='glyphicon glyphicon-"+sglyphicon+"'></span></button></p></div></td>";
			sTable += "</tr>";
		});
		$("#tbVehicules").html(sTable);
		$("#vehiculesFooter").removeClass("hidden");
	})
	loadVehiculeManufacturer();
}

function toggleActive(idVehicule, active)
{
	data = {"idVehicule":idVehicule, "active":active, "_token":$(".token").val()};
	console.log(data);
	$.ajax({
		url: "/vehicule/delete",
		type: 'post',
		dataType: 'text',
		data: data
	}).done(function(response)
	{
		loadVehicules();
		$(".token").val(response);
		console.log(response);
	})
}

function loadVehiculesFilter(event)
{
	event.preventDefault();
	URL = "/vehicule/filter/";
	URL +=  $("#iFilterVehicule").val();
	$("#iClient").val($("#select-client").val());
	$("#editClient").val($("#select-client").val());
	//alert(URL);
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json',
	}).done(function(data)
	{
		var sTable = "";

		$.each(data, function(index, vehicule)
		{
			//alert(vehicule);
			sTable += "<tr>";
			sTable += "<td>"+ vehicule.VHC_ID +"</td>";
			sTable += "<td>"+ vehicule.VHC_Registration +"</td>";
			sTable += "<td>"+ vehicule.VHC_IDV +"</td>";
			sTable += "<td>"+ "Brand" +"</td>";
			sTable += "<td>"+ "Model" +"</td>";
			sTable += "<td><div class='col-xs-6'><p class='text-center'data-placement='top' data-toggle='tooltip' title='Edit'>"+
						"<button class='btn btn-primary btn-xs' data-title='Edit' onclick='editVehicule("+vehicule.VHC_ID+")'><span class='glyphicon glyphicon-pencil'></span></button></p>"+
						"</div><div class='col-xs-6'><p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>"+
						"<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></p></div></td>";
			sTable += "</tr>";
		});
		$("#tbVehicules").html(sTable);
		$("#vehiculesFooter").removeClass("hidden");
	})
	loadVehiculeManufacturer();
}

function editVehicule(idVehicule)
{
	model = "";
	//alert(idVehicule);
	$("#editVehiculeID").val(idVehicule);
	URL = "/vehicule/" + idVehicule+"/jshow"
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json',
	}).done(function(data)
	{
		$("#editBrand").val(data[0]["VHMA_ID"]);
		loadVehiculeModelEdit(data[0]["VHMO_ID"]);
		$("#editRegistration").val(data[0]["VHC_Registration"]);
		$("#editIDVehicule").val(data[0]["VHC_IDV"]);
		$("#editCirrculationDate").val(data[0]["VHC_CirrculationDate"]);
		$("#previewPhoto").attr('src', data[0]["VHC_Photo"]);
		model = data[0]["VHMO_ID"]
		$("#editVehiculeModal").modal('show');
		
	})
}

function loadOverview(idVehicule)
{
	model = "";
	//alert(idVehicule);
	$("#editVehiculeID").val(idVehicule);
	URL = "/vehicule/" + idVehicule+"/jshow"
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json',
	}).done(function(data)
	{
		content="";
		if(data[0]["VHC_Photo"]!= ""){
			if($("#overviewDisplay").hasClass("hidden"))
			{
				$("#overviewDisplay").removeClass("hidden");
			}
			$("#overviewPhoto").attr('src', data[0]["VHC_Photo"]);}
		else{
			if(! $("#overviewDisplay").hasClass("hidden"))
			{
				$("#overviewDisplay").addClass("hidden");
			}
		}
		if(data[0]["VHC_Registration"] != null){
			content+="<h3>Registration: "+ data[0]["VHC_Registration"] + "</h3>" ; }
		if(data[0]["VHC_IDV"] != null){
			content+="<h3>Vehicule ID: "+ data[0]["VHC_IDV"] + "</h3>" ; }
		if(data[0]["VHMA_Name"] != null){
			content+="<h3>Brand: "+ data[0]["VHMA_Name"] + "</h3>" ; }
		if(data[0]["VHMO_Name"] != null){
			content+="<h3>Model: "+ data[0]["VHMO_Name"] + "</h3>" ; }
		if(data[0]["VHC_CirrculationDate"] != null){
			content+="<h3>Cirrculation Date: "+ data[0]["VHC_CirrculationDate"] + "</h3>" ;}
		
		$("#overviewContent").html(content);
		
		$("#btnConfigureVehicule").attr("href", "vehicule/" + data[0]["VHC_ID"] + "/detail");
		 
	})
}

function loadVehiculeManufacturer()
{
	URL = "/vehicule/manufacturer/";
	//alert(URL);
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json',
	}).done(function(data)
	{
		var sTable = "";
		sTable = "<option>Select Brand</option>";
		$.each(data, function(index, manufacturer)
		{
			sTable +="<option value='"+manufacturer.VHMA_ID+"''>"+ manufacturer.VHMA_Name+"</option>"
		});
		$("#selectBrand").html(sTable);
		$("#editBrand").html(sTable);
	})
}

function loadVehiculeModel()
{
	URL = "/vehicule/manufacturer/";
	URL += $("#selectBrand").val() + "/model";
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json'
	}).done(function(data)
	{
		var sTable = "";
		sTable = "<option>Select Model</option>";
		$.each(data, function(index, model)
		{
			sTable +="<option value='"+model.VHMO_ID+"''>"+ model.VHMO_Name+"</option>"
		});
		$("#selectModel").html(sTable);
	})
}

function loadVehiculeModelEdit(ModelID)
{
	URL = "/vehicule/manufacturer/";
	URL += $("#editBrand").val() + "/model";
	$.ajax({
		url: URL,
		type: 'get',
		dataType: 'json'
	}).done(function(data)
	{
		var sTable = "";
		sTable = "<option>Select Model</option>";
		$.each(data, function(index, model)
		{
			sTable +="<option value='"+model.VHMO_ID+"''>"+ model.VHMO_Name+"</option>"
		});
		$("#editModel").html(sTable);
		$("#editModel").val(ModelID);
	})
}

function createVehicule()
{
	data = new FormData($("#frmCreateVehicule")[0]);
	//alert(data);
	$.ajax({
		url: "/vehicule/create",
		type: 'post',
		dataType: 'json',
		data: data,cache: false,
        contentType: false,
        processData: false
	}).done(function(response)
	{
		loadVehicules();
		$("#frmCreateVehicule").children('input').val('');
		console.log(response);
	})
}

function updateVehicule()
{
	data = new FormData($("#frmEditVehicule")[0]);
	//alert(data);
	$.ajax({
		url: "/vehicule/update",
		type: 'post',
		dataType: 'text',
		data: data,cache: false,
        contentType: false,
        processData: false
	}).done(function(response)
	{
		console.log(response);
		$("#frmEditVehicule").children('input').val('');
		$(".token").val(response);
		loadVehicules();
	})
}

