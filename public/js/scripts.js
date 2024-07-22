$(document).ready(function() {
	$( "option" ).on( "click", function() {
	  $(this).addClass('selected');
	} );

	$('#categories').change(function(){ 
	    var value = $(this).val();
	    $('#create-post').data("categories", value);

	    $('#create-post').serializeArray();
	});

});