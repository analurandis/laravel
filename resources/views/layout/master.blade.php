<!DOCTYPE html>
<html>

<head>

	<title> Blog - @yield('title')</title>

{{ Html::style('css/bootstrap.css') }}
{{ Html::style('css/css/bootstrap.min.css') }}
{{ Html::style('css/bootstrap-theme.css')}}
{{ Html::style('css/bootstrap-theme.min.css') }}
<style>
    .button {
     color: #9d9d9d;
     display: block;
     background:none!important;
     border:none; 
     padding:0!important;
     font: inherit;
     /*border is optional*/
    
     cursor: pointer;
         display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
}

.button:hover,
.button:focus {
  text-decoration: none;
  background-color: #eee;
  color: white;
}


}

</style>

</head>
<body>
@section ('sidebar')
<div class="container-fluid">

<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
           <a class="navbar-brand" {{link_to_action('EntryController@index','Home')}}></a>
           
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Route::has('login'))
                @if (Auth::check())
                    <ul class="nav navbar-nav">
                        <li class="{{ (Request::is('/') ? 'active' : '') }}">
                            {{link_to_action('EntryController@create','Criar Post')}}
                        </li>
                        <li class="{{ (Request::is('/') ? 'active' : '') }}">
                          <form name="postuser" 
action="{{  action('EntryController@postuser') }}" method="GET" role="form">
{{ Form::text('user_id', Auth::user()->id , array('class'=>'form-control', 'TYPE'=>'hidden'))}}
    <button type="submit" class="button {{ (Request::is('/') ? 'active' : '') }}">Meus Posts</button>
    </form>


                           
                        </li>
                        <li class="{{ (Request::is('/') ? 'active' : '') }}">
                            {{link_to_action('UserController@index','Usuarios')}}
                        </li>

                    </ul>
                @endif
            @endif



               
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

         

           
        </div>
    </div>
</nav>
@show




<div class="container">
@yield('content')
</div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>