function loadVehicules()
{
	URL = "/vehicule/client/";
	URL +=  $("#select-client").val();
	$("#iClient").val($("#select-client").val());
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
						"<button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button></p>"+
						"</div><div class='col-xs-6'><p class='text-center' data-placement='top' data-toggle='tooltip' title='Delete'>"+
						"<button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></p></div></td>";
			sTable += "</tr>";
		});
		$("#tbVehicules").html(sTable);
		$("#vehiculesFooter").removeClass("hidden");
	})
}
function loadClients()
{

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

		$.each(data, function(index, manufacturer)
		{
			sTable +="<option value='"+manufacturer.VHMA_ID+"''>"+ manufacturer.VHMA_Name+"</option>"
		});
		$("#selectBrand").html(sTable);
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

		$.each(data, function(index, model)
		{
			sTable +="<option value='"+model.VHMO_ID+"''>"+ model.VHMO_Name+"</option>"
		});
		$("#selectModel").html(sTable);
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
		console.log(response);
	})
}

