<div class="card bd-callout bd-callout-{{ $class_form_create_presupuestaria or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de Indicatores.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'pindicadors.store', 'method' => 'POST', 'id'=>'form-pindicadors-create', 'class'=>'form-signin']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.mproductos.pindicadors.forms.fields')

            <button type="submit" class="btn-pindicadors-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-pindicadors">

                <i class="far fa-save"></i>
                Registrar

            </button>

            <button type="reset" class="btn-pindicadors-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mproductos.index') }}" role="button">
                Mostrar
                <i class="{{$icon_menus['mproductos'] or ''}}"></i>
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