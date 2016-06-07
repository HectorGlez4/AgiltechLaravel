function loadNewPeripheralModal()
{
	dataFilter = $("#frmFilter").serialize();
	$.ajax({
		url: '/agiltech/php/view/modals/formPupitreModal.php',
		type: 'POST',
		dataType: 'text',
		data: dataFilter,
	}).done(function(data)
	{
		$("#frmNewPeripheral").html("<hr>" + data);
	})
}