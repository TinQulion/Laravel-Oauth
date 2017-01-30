<!--
          Author: Joakim D
        -->

@extends('layout')
@section('content')

<style>
  body{
    background: #fff;
  }
</style>
<div id="a-wrapper">
  <div id="aheader">
    {{ HTML::image('img/header.png', 'Header image',Array('id' => 'headerimg')) }}
  </div>


  <br>
  <div id="roligbox">
  			<img src="img/penna.png"><img src="img/ladda.png"><img src="img/gubbe.png">
  			<h1>Ladda upp projekt och n&auml;tverka med arbetsgivare</h1></div>
  <div id="loginbox">

    <div style="margin-top:-25px;">
      {{ Form::open(array('url' => '/home', 'id'=>'form')) }}
        @if($errors->has())
          <p>Email eller lösenordet är inkorrekt, försök igen!</p>
        @endif
        E-Mail<br>{{ Form::text('email',"", Array('id'=>'username')) }}<br>
        L&ouml;senord<br>{{ Form::password('password',Array('id'=>'password')) }}<br><br>
        {{ Form::submit('Logga in', Array('class'=>'skicka')) }}
        <a href="#" class="skicka">Registrera dig</a>
      {{ Form::close() }}



       <?php// if(!empty(Session::get('key'))) $name = Session::get('key'); ?>

       <!-- {{ Form::submit('Login') }}-->

        <!--<span id="signinButton">
        <span class="g-signin"
        data-callback="signinCallback"
        data-clientid="179291477685-vmnc97hujne8rf4rv7ihtpta15fvbbf1.apps.googleusercontent.com"
        data-cookiepolicy="single_host_origin"
        data-requestvisibleactions="http://schema.org/AddAction"
        data-scope="https://www.googleapis.com/auth/plus.login">
        </span>
        </span>

          <a href="user.html"><div class="login_button">Logga in</div></a>
        <!-->
        </form>
      </div>




    </div>



  </div>

  <div id="finbox">
  		<p>Med en portfolio online g&ouml;r du det enkelt f&ouml;r f&ouml;retag att skicka jobberbjudande<br> som matchar just dina kompentenser.</p>
  		<a href="/register">{{ HTML::image('img/regi.png', 'register btn',Array('class' => 'a-btn' )) }}</a><br><br>
      {{ HTML::image('img/big_logo.png', 'Big logo', Array('id' => 'abigloggo')) }}
  </div>
</div>

@stop
