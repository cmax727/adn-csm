@section('styles')
  {{ HTML::style('css/login.css') }}
@stop
<div class="login">
    <div class="login-header">
      <a href="{{ URL::to('/') }}" class="logo"><img src="{{ URL::asset('img/logo.png') }}"></a>
    </div>

    <form class="login-form">
      <div class="control-group">
        <input type="text" class="login-field" value="" placeholder="Enter your name" id="login-name">
      </div>

      <div class="control-group">
        <input type="password" class="login-field" value="" placeholder="Password" id="login-pass">
      </div>

      <a class="btn btn-success btn-large btn-block" href="#">Login</a>
      <a class="login-link" href="#">Lost your password?</a>
    </form>
</div>