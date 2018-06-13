<div class="card bd-callout bd-callout-{{ $class_form_create_institucion or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de un Nuevo POA.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'mproblemas.store', 'method' => 'POST', 'id'=>'form-mproblemas-create', 'class'=>'form-signin']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mproblemas.mproblemas.forms.fields')

            <button type="submit" class="btn-mproblemas-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-mproblemas">

                <i class="far fa-save"></i>
                Registrar Problema

            </button>

            <button type="reset" class="btn-mproblemas-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('poas.index') }}" role="button">
                Mostrar
                <i class="{{$icon_poas or ''}}"></i>
              </a>

              <a class="btn btn-dark w-100" href="{{ route('mproblemas.index') }}" role="button">
                Mostrar
                <i class="{{$icon_mproblemas or ''}}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>