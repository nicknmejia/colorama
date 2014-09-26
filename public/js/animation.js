$('.table').hide();

$('.category').hide();




$( "#checkbox1" ).change(function() {
	  $( "#p808-tab" ).fadeToggle( "fast" );
	});

$( "#checkbox2" ).change(function() {
	  $( "#p806-tab" ).fadeToggle( "fast" );
	});

$( "#checkbox3" ).change(function() {
	  $( "#f-inch-tab" ).fadeToggle( "fast" );
	});



$( "#p808" ).click(function() {
	  $( "#pak808" ).fadeToggle( "fast" );
	});

$( "#p806" ).click(function() {
	  $( "#pak806" ).fadeToggle( "fast" );
	});

$( "#f-inch" ).click(function() {
	  $( "#four-inch" ).fadeToggle( "fast" );
	});
