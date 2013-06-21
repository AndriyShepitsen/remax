$(function () {
	$('#home').on('mousemove',function(e){

		$('#popup').remove();

		var varPopup = $('<div></div>',{
			text: 'Home page',
			id:'popup'});

		varPopup.css('position', 'absolute');
		varPopup.css('left', e.pageX-80);
		varPopup.css('top', e.pageY-30);

		varPopup.appendTo('body');
	});

	$('#home').on('mouseout',function(){

		$('#popup').remove();
	});
});	

$(function () {
	$('#mail').on('mousemove',function(e){

		$('#popup').remove();

		var varPopup = $('<div></div>',{
			text: 'Mail',
			id:'popup'});

		varPopup.css('position', 'absolute');
		varPopup.css('left', e.pageX-35);
		varPopup.css('top', e.pageY-30);

		varPopup.appendTo('body');
	});

	$('#mail').on('mouseout',function(){

		$('#popup').remove();
	});
});