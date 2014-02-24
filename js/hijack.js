/*!
 * Static HTML hijacking
 */
$(document).ready(function(){
	var _path = location.pathname;
	$('.menu a').each(function(){
		if($(this).attr('href')==_path)
			$(this).addClass('xuan');
	});
});