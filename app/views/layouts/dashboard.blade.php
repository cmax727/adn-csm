<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>American Driver Network</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="/flat/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/flat/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="/flat/js/html5shiv.js"></script>
    <![endif]-->
    <link href="/css/styles.css" rel="stylesheet">
  </head>
  <body >
    <div class="container">
        <header>
            <div class="row">
                <div class="span3">
                    <a href="" id="logo"><img src="/img/logo.png"></a>
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
                        <div class="avatar-container">
                            <img src="/img/avatar.jpg" class="avatar" />
                            Hi, Username
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
    <script src="/flat/js/jquery-1.8.3.min.js"></script>
    <script src="/flat/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/flat/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/flat/js/bootstrap.min.js"></script>
    <script src="/flat/js/bootstrap-select.js"></script>
    <script src="/flat/js/bootstrap-switch.js"></script>
    <script src="/flat/js/flatui-checkbox.js"></script>
    <script src="/flat/js/flatui-radio.js"></script>
    <script src="/flat/js/jquery.tagsinput.js"></script>
    <script src="/flat/js/jquery.placeholder.js"></script>
    <script src="/flat/js/jquery.stacktable.js"></script>

    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" data-main="/js/app.config.js" src="/js/require.js"></script>
  </body>
</html>
