$(function () {
	$('.homeIcon').on('mousemove',function(e){

		$('#popup').remove();

		var varPopup = $('<div></div>',{
			text: 'Home page',
			id:'popup'});

		varPopup.css('position', 'absolute');
		varPopup.css('left', e.pageX-80);
		varPopup.css('top', e.pageY-30);

		varPopup.appendTo('body');
	});

	$('.homeIcon').on('mouseout',function(){

		$('#popup').remove();
	});

		$('.mailIcon').on('mousemove',function(e){

		$('#popup').remove();

		var varPopup = $('<div></div>',{
			text: 'Contact Us',
			id:'popup'});

		varPopup.css('position', 'absolute');
		varPopup.css('left', e.pageX-60);
		varPopup.css('top', e.pageY-30);

		varPopup.appendTo('body');
	});

	$('.mailIcon').on('mouseout',function(){

		$('#popup').remove();
	});

	$('.mailIcon').on('click', function(){
        // Prevents the default action to be triggered. 
              $('#myModal').foundation('reveal', 'open');


  });


	$('a.close-reveal-modal').on('click', function(){
        // Prevents the default action to be triggered. 
              $('#myModal').foundation('reveal', 'close');


  });



});	


  


  /* My slideDown mail form starts here */

