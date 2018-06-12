<div class="card bd-callout bd-callout-{{ $class_form_create_presupuestaria or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de Estados.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'aestados.store', 'method' => 'POST', 'id'=>'form-aestados-create', 'class'=>'form-signin']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.mactividads.aestados.forms.fields')

            <button type="submit" class="btn-aestados-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-aestados">

                <i class="far fa-save"></i>
                Registrar

            </button>

            <button type="reset" class="btn-aestados-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('aestados.index') }}" role="button">
                Mostrar
                <i class="{{$icon_menus['aestados'] or ''}}"></i>
              </a>

              <a class="btn btn-dark w-100" href="{{ route('mactividads.index') }}" role="button">
                Mostrar
                <i class="{{$icon_menus['mactividads'] or ''}}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}




      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>