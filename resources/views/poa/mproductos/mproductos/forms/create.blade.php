<div class="card bd-callout bd-callout-{{ $class_form_create_presupuestaria or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de una Nueva M.Productos.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'mproductos.store', 'method' => 'POST', 'id'=>'form-mproductos-create', 'class'=>'form-signin']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mproductos.mproductos.forms.fields')

            <button type="submit" class="btn-mproductos-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-mproductos">

                <i class="far fa-save"></i>
                Registrar

            </button>

            <button type="reset" class="btn-mproductos-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mproblemas.index') }}" role="button">
                Mostrar
                <i class="{{$icon_menus['mproblemas'] or ''}}"></i>
              </a>

              <a class="btn btn-dark w-100" href="{{ route('mobjetivos.index') }}" role="button">
                Mostrar
                <i class="{{$icon_menus['mobjetivos'] or ''}}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}




      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>