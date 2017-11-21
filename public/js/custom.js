
console.log('testing');

$('.wrap').click(function() {
    $( this ).toggleClass( "click_overlay" );
});


$( function() {
    console.log('HERE');
    $( "#datepicker" ).datepicker();
    } );
  