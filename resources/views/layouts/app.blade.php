<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{!! asset('/css/main.css') !!}" >
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('/img/logo.ico') !!}" />
    
    <title>MathWeb Education</title>
</head>


<body>

    <p>Version 0.0.2</p>
    <div class="ui container">

        <div class="ui secondary  menu">

            <div class="item" >
                <a href="{{ url('/') }}">
                <img  class="ui small image" src="{!! asset('/img/mathweb.PNG') !!}">
                </a>
            </div>

            <div class="menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search link icon"></i>
                    </div>
                </div>
            </div>
            <div class="right menu">


                    <a href="{{ route('chat') }}">

                                <div  class="ui labeled button item" tabindex="0">
                                                    <div class="ui button"   style="color:blue">
                                                        <i class="wechat icon"></i> Chat
                                                    </div>
                                                    <a class="ui basic blue left pointing label">
                                                        +1
                                                    </a>  
                                </div>

                    </a>
               
                <a class="item blue">
                    <i class="graduation cap icon"></i> Cursos
                </a>
                <a class="item">
                    <i class="calendar outline icon"></i> Tutorias
                </a>
                <a class="item">
                    <i class=" users icon"></i>Foros
                </a>
                <a class="item">
                    <i class="book icon"></i> Biblioteca
                </a>

                @guest

                    <a class="item" href="{{ route('login') }}" >{{ __('Ingresar') }}</a>

                    @if (Route::has('register'))
                    <div class="item">
                        <div class="ui green button">
                            <a  id="register" href="{{ route('register') }}">Registrar</a>
                            <i class="user plus icon"></i>    
                        </div>
                    </div>
                    @endif

                @else
                <div class="ui primary dropdown item">
                     <i class="blue book child icon"></i>  {{ Auth::user()->name }} <i class="icon dropdown"></i>
                    <div class="menu">
                        <a class="item" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="window close icon"></i> 
                        {{ __('Salir') }}
                        
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        
                    </div>
                </div>
                @endguest

            </div>

        </div>

        <main class="py-4">
            @yield('content')
        </main>

      

     
        <br>
        <footer>
            <div class="ui green inverted vertical footer segment">

                <div class="ui container">
                    <button class="ui circular facebook icon button">
                        <i class="facebook icon"></i>
                      </button>
                    <button class="ui circular twitter icon button">
                        <i class="twitter icon"></i>
                      </button>
                    <button class="ui circular linkedin icon button">
                        <i class="linkedin icon"></i>
                      </button>
                    <button class="ui circular google plus icon button">
                        <i class="google plus icon"></i>
                      </button>
                </div>
            </div>

        </footer>



    </div>

    <script>
        $(document).ready(function() {
            $('.ui.dropdown').dropdown();
        });
    </script>
</body>

</html>