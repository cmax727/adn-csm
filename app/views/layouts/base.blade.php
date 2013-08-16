<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
        @section('title')
            American Driver Network
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('flat/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('flat/css/flat-ui.css') }}

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      {{ HTML::script('flat/js/html5shiv.js') }}
    <![endif]-->
    {{ HTML::style('css/styles.css') }}
    
    @yield('styles')

    <script type="text/javascript">
        var root = "{{ URL::to('/') }}";
    </script>
  </head>
  <body >
    @yield('page')


    <!-- Load JS here for greater good =============================-->
    {{ HTML::script('flat/js/jquery-1.8.3.min.js') }}
    {{ HTML::script('flat/js/jquery-ui-1.10.3.custom.min.js') }}
    
    {{ HTML::script('flat/js/jquery.ui.touch-punch.min.js') }}
    {{ HTML::script('flat/js/bootstrap.min.js') }}
    {{ HTML::script('flat/js/bootstrap-select.js') }}
    {{ HTML::script('flat/js/bootstrap-switch.js') }}
    {{ HTML::script('flat/js/flatui-checkbox.js') }}
    {{ HTML::script('flat/js/flatui-radio.js') }}
    {{ HTML::script('flat/js/jquery.tagsinput.js') }}
    {{ HTML::script('flat/js/jquery.placeholder.js') }}
    {{ HTML::script('flat/js/jquery.stacktable.js') }}

    {{ HTML::script('js/lib/underscore.min.js') }}
    {{ HTML::script('js/lib/backbone.min.js') }}

    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    {{ HTML::script('js/lib/require.js', ['data-main'=>URL::asset('js/app.config.js')]) }}

    @yield('scripts')
    
  </body>
</html>
