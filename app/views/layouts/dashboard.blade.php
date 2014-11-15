@extends('layouts.base')
@section('page')
<div class="container">
        <header id="header">
            <div class="row">
                <div class="span3">
                    <a href="{{ URL::to('/') }}" id="logo"><img src="{{ URL::asset('img/logo.png') }}"></a>
                </div>
                <div class="span9">
                    <div id="breadcrumbs" class="pull-left">
                        @yield('breadcrumbs')
                    </div>
                    <a href="{{ URL::to('logout') }}" class="pull-right"><i class="fui-power"></i>Logout</a>
                </div>
            </div>
        </header>
        <div id="main">
            <div class="row">
                <div class="span3" id="sidebar">
                    <div id="sidebar-container">
                        <div class="avatar-container clearfix">
                            <img src="{{ URL::asset('img/avatar.jpg') }}" class="avatar" />
                            <div class="username">Hi, Username</div>
                        </div>
                        <div id="main-menu">
                            {{ $menu }}
                        </div>
                    </div>      
                </div>
                <div class="span9">
                    {{ $content }}
                </div>
            </div>
        </div>       
    </div>
    <!-- /.container -->
@endsection