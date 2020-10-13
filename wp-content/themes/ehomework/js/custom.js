jQuery(document).ready(function($) {
 
 	$('.mobileMenuToggle').click(function() {
	 	$('.mobileMenu .menu').slideToggle( 'slow' );
	 });

	$('#invoiceAmount').keyup(function(){
      value = $("#invoiceAmount").val() * 1.03;
      value = Math.round(value*100)/100
      $("#amount").val(value);
   });
	
});


