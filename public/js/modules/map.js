define(
   [
   ],
   function () {
      return {
         init: function () {

            $('#map').usmap({
               'stateStyles': {
                  fill: '#e1e5e6', 
                  "stroke-width": 1,
                  'stroke' : '#FFF'
                },
                'stateHoverStyles': {
                  fill: '#1abc9c'
                },
               'click' : function(event, data) {
                  $('#alert')
                  .text('Click '+data.name+' on map 1')
                  .stop()
                  .css('backgroundColor', '#ff0')
                  .animate({backgroundColor: '#ddd'}, 1000);
               }
    			
            });
            
            
         }
      }
    }
);