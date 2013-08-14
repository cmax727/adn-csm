<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>American Driver Network</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="/flat/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/flat/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/flat/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="/flat/js/html5shiv.js"></script>
    <![endif]-->
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="span4">
            <nav>
            <ul class="nav">
                <li><a href="">Provider settings</a></li>
                <li><a href="">Clients</a>
                    <ul>
                        <li><a href="">New Clients</a></li>
                    </ul>
                </li>
                <li><a href="">Job Posts</a>
                    <ul>
                        <li><a href="">New Job</a></li>
                    </ul>
                </li>
                <li><a href="">Applications</a>
                    <ul>
                        <li><a href="">Mailout/Blast</a></li>
                    </ul>
                </li>
                <li><a href="">Banners</a></li>
        </div>
        <div class="span8">
            <div id="stats">
                <h3>App Totals</h3>
                <select>
                    <option>Last 24 Hours</option>
                    <option>Last Week</option>
                    <option>Last Month</option>
                </select>
                <input type="text" value="{{ date('d, m Y') }}">
                <input type="text" value="{{ date('d, m Y') }}">
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
  </body>
</html>
