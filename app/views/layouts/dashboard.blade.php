<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>American Driver Network</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('flat/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('flat/css/flat-ui.css') }}

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      {{ HTML::script('flat/js/html5shiv.js') }}
    <![endif]-->
    {{ HTML::style('css/styles.css') }}
    <script type="text/javascript">
        var root = "{{ URL::to('/') }}";
    </script>
  </head>
  <body >
    <div class="container">
        <header>
            <div class="row">
                <div class="span3">
                    <a href="" id="logo"><img src="{{ URL::asset('img/logo.png') }}"></a>
                </div>
                <div class="span9">
                    <a href="" class="pull-left">Dashboard</a>
                    <a href="" class="pull-right"><i class="fui-power"></i>Logout</a>
                </div>
            </div>
        </header>
        <div id="main">
            <div class="row">
                <div class="span3" id="sidebar">
                    <div class="pad">
                        <div class="avatar-container clearfix">
                            <img src="{{ URL::asset('img/avatar.jpg') }}" class="avatar" />
                            <div class="username">Hi, Username</div>
                        </div>
                        <ul class="nav nav-list">
                            <li>
                                <a href="">
                                    <i class="fui-gear"></i>Provider settings
                                </a>
                            </li>
                            <li>
                                <a href=""><i class="fui-user"></i>Clients</a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="">
                                            <i class="fui-plus"></i>New Clients
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fui-new"></i>Job Posts
                                </a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="">
                                            <i class="fui-plus"></i>New Job
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fui-export"></i>Applications
                                </a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="">
                                            <i class="fui-mail"></i>Mailout/Blast
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Banners</a></li>
                        </ul>
                    </div>      
                </div>
                <div class="span9">
                    {{ $content }}
                </div>
            </div>
        </div>       
    </div>
    <!-- /.container -->


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

    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    {{ HTML::script('js/require.js', ['data-main'=>URL::asset('js/app.config.js')]) }}
    
  </body>
</html>
