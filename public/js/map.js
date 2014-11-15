$(function(){
	alert('b');
	requirejs(['./modules/map'], function (map) {
		map.init();
	});
});