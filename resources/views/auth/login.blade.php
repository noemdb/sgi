@extends ('layouts.app_login')

@section ('content')

    <form class="form-signin" method="POST" action="{{ route('login') }}">

        {{ csrf_field() }}

        <center>

            <img class="box" class="mb-4" src="{{ asset('images/brand/xlg/sgi.png') }}" alt="">
            {{-- <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}


        </center>

        <div class="form-label-group">

            <input type="text" id="inputUser" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Nombre de Usuario" value="{{ old('username') }}" required>
            
            <label for="inputUser">Nombre de Usuario</label>            
            
            @if ($errors->has('username'))

                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>

            @endif

        </div>

        <div class="form-label-group">

            <input type="password" id="inputPassword" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required>
            <label for="inputPassword">Contraseña</label>

            @if ($errors->has('password'))

                <div class="invalid-feedback" style="width: 100%;">
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                </div>

            @endif

        </div>
                      
        <div class="checkbox mb-2" align="right">

            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
            </label>
            
        </div>

        @component('elements.widgets.button')
            @slot('type','submit')
            @slot('value','Ingresar')
            @slot('class','primary btn-block')
        @endcomponent
        
        <br>
        <a class="btn-link" href="{{ route('password.request') }}">
            Olvidaste tu Contraseña?
        </a>

    </form>

@endsection


@push('stylesheet')

    <style type="text/css">

        .brand-login{
            box-shadow: 0 1px 2px rgba(0, 123, 255,0.15)/*rgba(0,0,0,0.15)*/;
            transition: all .6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .item {
            display: inline-block;
            background-color: #fff;
            width: 120px;
            height: 120px;
            border-radius: 5px;
            margin: 10px;
        }

        .box {
          position: relative;
          display: inline-block;
          width: 100px;
          height: 100px;
          background-color: #fff;
          border-radius: 5px;
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
          border-radius: 5px;
          -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
          transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .box::after {
          content: "";
          border-radius: 5px;
          position: absolute;
          z-index: -1;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
          opacity: 0;
          -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
          transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .box:hover {
          -webkit-transform: scale(1.25, 1.25);
          transform: scale(1.25, 1.25);
        }

        .box:hover::after {
            opacity: 1;
        }
    </style>

@endpush


{{-- @section('stylesheet')
    @parent

    <style type="text/css">
        /* The slow way */
        .make-it-slow {
          box-shadow: 0 1px 2px rgba(0,0,0,0.15);
          transition: box-shadow 0.3s ease-in-out;
        }

        /* Transition to a bigger shadow on hover */
        .make-it-slow:hover {
          box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* The fast way */
        .make-it-fast {
          box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        }

        /* Pre-render the bigger shadow, but hide it */
        .make-it-fast::after {
          box-shadow: 0 5px 15px rgba(0,0,0,0.3);
          opacity: 0;
          transition: opacity 0.3s ease-in-out;
        }

        /* Transition to showing the bigger shadow on hover */
        .make-it-fast:hover::after {
          opacity: 1;
        }
    </style>

@endsection --}}