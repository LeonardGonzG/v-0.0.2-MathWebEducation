@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="ui visible message">
        <p> {{ session('status') }}</p>
        </div>                  
    @endif

    <div class="ui info message">
        <i class="close icon"></i>
        <div class="header">
            <a>Inicio de sesión</a>
            <h1>Bienvenido {{ Auth::user()->name }}</h1> 
        </div>
        <ul class="list">
            <li>Accede a clases personalizadas en Matematicas</li>
            <li>Retos</li>
            <li>Simulacros</li>
            <li>Participa en Foros</li>
        </ul>
    </div>


</div>
@endsection
