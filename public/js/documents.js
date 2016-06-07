function loadDocuments()
{
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
}

loadDocuments();