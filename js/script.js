$(function(){
	$("[data-toggle='tooltip']").tooltip();
	$("[data-toggle='popover']").popover();
	$('.carousel').carousel({
		interval: 7000
	});
	$('#contacto').on('show.bs.modal', function (e){
		console.log('El contacto se está mostrardo');
		$('#conctatoBtn').removeClass('btn-outline-light');
		$('#contactoBtn').addClass('btn-danger');
		$('#contactoBtn').prop('dispabled', true);

	});
});