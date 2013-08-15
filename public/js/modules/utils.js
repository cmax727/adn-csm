define(
    [],

    function () {
        var datepickerSelector = '.datepicker';
        
        return {
            init: function () {
                // jQuery UI Datepicker JS init
                $(datepickerSelector).datepicker({
                  showOtherMonths: true,
                  selectOtherMonths: true,
                  dateFormat: "d MM, yy",
                  yearRange: '-1:+1'
                }).prev('.btn').on('click', function (e) {
                  e && e.preventDefault();
                  $(datepickerSelector).focus();
                });
                // Now let's align datepicker with the prepend button
                $(datepickerSelector).datepicker('widget').css({'margin-left': -$(datepickerSelector).prev('.btn').outerWidth() - 2});

                $("select").selectpicker({style: 'btn-inverse', menuStyle: 'dropdown-primary'});
            }
        };
    }
);