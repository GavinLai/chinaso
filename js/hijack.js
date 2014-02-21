/*!
 * Static HTML hijacking
 */
$(document).ready(function(){
	var _path = location.pathname;
	console.log('pathname: '+_path);
	$('.menu a').each(function(){
		if($(this).attr('href')==_path)
			$(this).addClass('xuan');
	});
});