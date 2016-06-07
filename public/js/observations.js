function loadObservations()
{
	dataFilter = "";
	$.ajax({
		url: '/agiltech/js/observations.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";
		$.each(data.observations, function(index, observation)
		{
			sTable += "<div class='row'>";
			if(observation.img != "")
			{
				sTable += "<div class='col-xs-3'><img class='thumbnail img-responsive' src='/agiltech/assets/img/"+observation.img+"'></div>";
				sTable += "<div class='col-xs-9'>";
				sTable += "<h3>" + observation.title + " <small>" + observation.author + " " + observation.date +"</small></h3>";
				sTable += "<p>"+observation.description+"</p></div>";
			}
			else
			{
				sTable += "<div class='col-xs-12'>";
				sTable += "<h3>" + observation.title + " <small>" + observation.author + " " + observation.date +"</small></h3>";
				sTable += "<p>"+observation.description+"</p></div>";
			}
			sTable += "</div>";
			
		});
		$("#observationsModalBody").html(sTable);
	})
}