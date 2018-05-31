// JavaScript Document
$ ( function () {
	var menuVisble = false;
	$ ('#menuBtn' ).click (function () {
		if (menuVisible ) {
			$('#myMenu').css({'display' : 'none'});
			menuVisible = false;
			return;
		}
		$('#myMenu').css({'display' : 'none'});
		menuVisible = true;
	});
	$('#myMenu').click(function () {
		$(this).css({'display' : 'none'});
		menuVisible = false;
	});
});