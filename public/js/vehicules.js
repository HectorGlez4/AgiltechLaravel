function loadVehicules()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/vehicules/client/',
		type: 'POST',
		dataType: 'json'
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.vehicules, function(index, vehicule)
		{
			sTable += "<tr>";
			sTable += "<td>"+ vehicule.id +"</td>";
			sTable += "<td>"+ vehicule.registration +"</td>";
			sTable += "<td>"+ vehicule.idVehicule +"</td>";
			sTable += "<td>"+ vehicule.brand +"</td>";
			sTable += "<td>"+ vehicule.model +"</td>";
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