@extends('layouts.app')

@section('content')
<div class="container">

<div class="ui grid container">

<div class="five wide column"></div>


<div class="six wide column">

<div class="ui blue segment ">

<h1>Ingresa a MathWeb Education</h1>

<form class="ui form" method="POST" action="{{ route('login') }}" >
     @csrf
    <div class="field">
        <label for="email">Email</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Ingresa email" value="{{ old('email') }}" required autocomplete="email" autofocus>
   
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


</div>


</div>

</div>
@endsection
