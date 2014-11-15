requirejs.config({
	baseUrl: root + '/js'
});

$(function(){
	requirejs(['main'], function (main) {
		main.start();
	});
});