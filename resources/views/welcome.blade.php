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

            <div class="item">
                <img class="ui small image" src="./img/mathweb.PNG">
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

                <div class="ui primary dropdown item">
                    <i class="user circle icon"></i> Usuarios <i class="icon dropdown"></i>
                    <div class="menu">
                        <a class="item"><i class="child icon"></i> Estudiante</a>
                        <a class="item"><i class="id card icon"></i> Tutores</a>
                        <a class="item"><i class="user icon"></i> Profesores</a>
                    </div>
                </div>

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

                @if (Route::has('login'))

                     @auth

                    <div class="item">
                        <button class="circular ui icon button">
                            <a href="{{ url('/home') }}">
                            <i class=" circular inverted blue icon home"></i>
                            </a> 
                        </button>
                    </div>
                     
                    @else

                        @if (Route::has('register'))
                        <div class="item">
                            <div class="ui green button">
                                    <a  id="register" href="{{ route('register') }}">Registrarse&nbsp;</a>
                                    <i class="user plus icon"></i>   
                            </div>
                        </div>
                        @endif   
                    @endauth

                 @endif    

            </div>

        </div>

        <div class="ui segments">
            <div class="ui green  segment">
                <div class="ui grid">
                    <div class="one wide column"></div>
                    <div class="nine wide column ">
                        <a class="ui big image">
                            <img src="./img/womanMath.jpg" class="ui big rounded image">
                            <h2>
                                <span>MathWeb Education</span>
                            </h2>
                        </a>
                    </div>

                   

                    @if (Route::has('login'))

                        @auth
                        <div class="five wide column ">
                            <div class="ui green message">
                            <div class="header">
                                Bienvenido!!
                            </div>
                            <p>Gracias por hacer parte de nuestra comunidad</p>
                            </div>

                            <div class="ui card">
                          
                                <img  class="ui medium image" src="https://avatars.dicebear.com/v2/human/{{ Auth::user()->name }}.svg">
                           
                            <div class="content">
                                <a class="header" href="#">{{ Auth::user()->name }}</a>
                                <div class="meta">
                                <a>{{ Auth::user()->email }}</a>
                                </div>
                            </div>
                            </div>


                        </div>

                        @else
                         <div class="four wide column ">
                            <h1>Ingresa a MathWeb Education</h1>

                            <form class="ui form" method="POST" action="{{ route('login') }}" >
                                @csrf
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name="email" placeholder="Ingresa email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                                    @error('email')

                                    <div class="ui negative message">
                                            <i class="close icon"></i>
                                            <div class="header">
                                                    {{ $message }}
                                                </div>
                                                <p>
                                                </p>
                                    </div>
                                    @enderror
                            
                                </div>
                                <div class="field">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                                
                                    @error('password')
                                    <div class="ui negative message">
                                            <i class="close icon"></i>
                                            <div class="header">
                                                    {{ $message }}
                                                </div>
                                                <p>
                                                </p>
                                    </div>

                                    @enderror
                                
                                </div>
                                <div class="field">
                                @if (Route::has('password.request'))    
                                    Haz olvidado la Contraseña??
                                    <a href="{{ route('password.request') }}">Reestablecer</a>

                                @endif    
                                </div>
                                <button class="ui primary button" type="submit">Ingresar</button>
                            </form>
                        </div>
                        @endauth

                    @endif  

                    
                </div>
            </div>
        </div>

        <div class="ui three statistics">
            <div class="statistic">
                <div class="value">
                    + 10
                </div>
                <div class="label">
                    Suscripciones
                </div>
            </div>
            <div class="statistic">
                <div class="text value">
                    1 <br> certificación
                </div>
                <div class="label">
                    Apps.co
                </div>
            </div>
            <div class="statistic">
                <div class="value">
                    <i class="child icon"></i> +5
                </div>
                <div class="label">
                    Tutores
                </div>
            </div>

        </div>
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

        $('.message .close')
            .on('click', function() {
                $(this)
                .closest('.message')
                .transition('fade')
                ;
        });
    </script>
</body>

</html>