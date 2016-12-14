$(document).ready(function () {
	$('.list-group-item').mouseover(function () {
		$(this).parent().children('ul.tree').toggle(300);
		$('.tree').css("z-index","3333");
	});
});

$('.icon').click(function(){
	$(this).toggleClass('flecha');
});