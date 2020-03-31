<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{!! asset('/css/main.css') !!}" >
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

/////
            

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
    </script>
</body>

</html>