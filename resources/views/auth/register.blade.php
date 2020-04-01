@extends('layouts.app')

@section('content')

<div class="container">

    <div class="ui grid container">

        <div class="five wide column"></div>


        <div class="seven wide column">

            <div class="ui green segment ">

            <h1>Registrar en MathWeb Education</h1>

            <form class="ui form" method="POST" action="{{ route('register') }}">
            @csrf

            @error('name')
            <div class="ui negative message">
                    <i class="close icon"></i>
                    <div class="header">
                            {{ $message }}
                        </div>
                        <p>
                        </p>
            </div>
            @enderror

            <div class="field">

                <label for="name">Nombre</label>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
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
                <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="current-password">
            
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
                <label for="password-confirm" class="">{{ __('Confirmar contraseña') }}</label>
                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">      
            </div>

            <button class="ui primary button" type="submit">Registrar usuario</button>

            </form>
    

            </div>
        </div>
    </div>
</div>

@endsection