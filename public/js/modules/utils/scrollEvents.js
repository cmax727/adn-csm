define(
    [],

    function () {

    	var headerSize = 58;
        
        return {
            set: function () {
            	$(window).scroll(function(){
                    if($(window).scrollTop() > headerSize)
                        $('#sidebar-container').addClass('fixed');
                    else if( $('#sidebar-container').hasClass('fixed') )
                        $('#sidebar-container').removeClass('fixed');
            	})
            }
        };
    }
);