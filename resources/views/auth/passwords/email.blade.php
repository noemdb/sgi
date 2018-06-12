@extends ('layouts.app_login')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">

        {{ csrf_field() }}

        <center>

            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

            <h2 class="form-signin-heading">Reiniciar Contraseña</h2>

        </center>

        <div class="form-label-group">
            <input type="text" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Emial" value="{{ old('email') }}" required autofocus>
            <label for="inputEmail">Dirección de E-Mail</label>
            
            
            @if ($errors->has('email'))

                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>

            @endif

        </div>

        @component('elements.widgets.button')
            @slot('type','submit')
            @slot('value','Reiniciar Contraseña')
            @slot('class','primary btn-block')
        @endcomponent
        
        <br>
        <a class="btn-link" href="{{ route('login') }}">
            Ingresar
        </a>

    </form>
@endsection