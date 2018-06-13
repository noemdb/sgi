<div class="card bd-callout bd-callout-{{ $class_form_create_institucion or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de un Nuevo POA.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'poas.store', 'method' => 'POST', 'id'=>'form-poa-create', 'class'=>'form-signin']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.poas.forms.fields')

            <button type="submit" class="btn-poa-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-poa">

                <i class="far fa-save"></i>
                Registrar POA

            </button>

            <button type="reset" class="btn-poa-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('direccions.index') }}" role="button">
                Mostrar
                <i class="fas fa-warehouse"></i>
              </a>

              <a class="btn btn-dark w-100" href="{{ route('poas.index') }}" role="button">
                Mostrar
                <i class="fas fa-th"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}




      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>