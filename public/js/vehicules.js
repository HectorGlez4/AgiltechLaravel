function loadVehicules()
{
	URL = "/vehicule/client/";
	URL +=  $("#client-select").val();
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
createVehicule()
{
	
}