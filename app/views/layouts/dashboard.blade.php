@extends('layouts.base')
@section('page')
<div class="container">
        <header>
            <div class="row">
                <div class="span3">
                    <a href="{{ URL::to('/') }}" id="logo"><img src="{{ URL::asset('img/logo.png') }}"></a>
                </div>
                <div class="span9">
                    <a href="{{ URL::to('/') }}" class="pull-left">Dashboard</a>
                    <a href="{{ URL::to('logout') }}" class="pull-right"><i class="fui-power"></i>Logout</a>
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
                                <a href="{{ URL::to('provider/settings') }}">
                                    <i class="fui-gear"></i>Provider settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('provider/client') }}"><i class="fui-user"></i>Clients</a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="{{ URL::to('provider/client/new') }}">
                                            <i class="fui-plus"></i>New Clients
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ URL::to('provider/job') }}">
                                    <i class="fui-new"></i>Job Posts
                                </a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="{{ URL::to('provider/job/new') }}">
                                            <i class="fui-plus"></i>New Job
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ URL::to('provider/app') }}">
                                    <i class="fui-export"></i>Applications
                                </a>
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="{{ URL::to('provider/app/mail') }}">
                                            <i class="fui-mail"></i>Mailout/Blast
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ URL::to('provider/banners') }}">Banners</a></li>
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
@endsection