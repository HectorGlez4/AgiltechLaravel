function loadInterventions()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/js/interventions.json',
		type: 'POST',
		dataType: 'json',
		data: dataFilter,
	}).done(function(data)
	{
		var sTable = "";

		$.each(data.interventions, function(index, intervention)
		{
			var iconStatus
			if(intervention.status < 0)
			{
				sTable += "<tr class='danger'>";
				iconStatus = "<td class='text-center'><span class='glyphicon glyphicon-exclamation-sign'></span></td>";
			}
			else if(intervention.status == 0)
			{
				sTable += "<tr class='info'>";
				iconStatus =  "<td class='text-center'><span class='glyphicon glyphicon-wrench'></span></td>";
			}
			else{
				sTable += "<tr>";
				iconStatus = "<td class='text-center'><span class='glyphicon glyphicon-floppy-disk'></span></td>";
			}
			sTable += "<td><a href='#interventionConfirmationModal' data-toggle='modal'>"+ intervention.id +"</td>";
			sTable += "<td>"+ intervention.client +"</td>";
			sTable += "<td>"+ intervention.vehicule +"</td>";
			sTable += "<td>"+ intervention.date +"</td>";
			sTable += "<td>"+ intervention.type +"</td>";
			sTable += "<td>"+ intervention.technicien +"</td>";
			sTable += iconStatus;
			sTable += "</tr>";
		});
		$("#tbInterventions").html(sTable);
		$.each(data.interventions[0].tasks, function(index, task){
			$("#interventionTasks").append("<div class='list-group-item list-group-item-danger'>"+task.task+"</div>")
		})
	})
}

$('#interventionConfirmationModal').on('show.bs.modal', function (e) {
  	var id = e.relatedTarget.innerHTML;
	$.ajax({
		url: '/agiltech/js/interventions.json',
		type: 'POST',
		dataType: 'json',
		data: id,
	}).done(function(data)
	{	
		intervention = data.interventions[id-1];
		$("#modalTitle").html(intervention.type + "<small> Vehicule: " + intervention.vehicule +"</small>")
		if(intervention.status < 0)
		{	
			tasks = "";
			$.each(data.interventions[id-1].tasks, function(index, task){
				tasks += "<div class='list-group-item list-group-item-danger'>"+task.task+"</div>"
				
			})
			$("#interventionTasks").html(tasks);
			$("#interventionConfirmationButton").html("Begin Intervention");
		}
		else if(intervention.status > 0)
		{	
			tasks = "";
			$.each(data.interventions[id-1].tasks, function(index, task){
				tasks += "<div class='list-group-item list-group-item-success'>"+task.task+"</div>"
				
			})
			$("#interventionTasks").html(tasks);
			$("#interventionConfirmationButton").html("Open Intervention");
		}
		else
		{	
			tasks = "";
			$.each(data.interventions[id-1].tasks, function(index, task){
				tasks += "<div class='list-group-item list-group-item-info'>"+task.task+"</div>"
				
			})
			$("#interventionTasks").html(tasks);
			$("#interventionConfirmationButton").html("Continue Intervention");
		}
	})

})