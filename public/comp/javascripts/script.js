 /* =popup for home and mail icons in footer */

 $(function () {


 	$('.mailIcon').on('click', function(){
// Prevents the default action to be triggered.
$('#myModal').foundation('reveal', 'open');
});


 	/* My slideDown mail form starts here */
 	$('a.close-reveal-modal').on('click', function(){
// Prevents the default action to be triggered.
$('#myModal').foundation('reveal', 'close');
});
 });
