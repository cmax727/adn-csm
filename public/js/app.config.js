requirejs.config({
	baseUrl: '/js'
});

$(function(){
	requirejs(['main'], function (main) {
		main.start();
	});
});