<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Determinante.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($pdeterminante,['route' => ['pdeterminantes.update', $pdeterminante->id], 'method' => 'PUT', 'id'=>'form-update-pdeterminante_'.$pdeterminante->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            {{-- @include('admin.poa.mproblemas.pdeterminantes.forms.fields') --}}
            @include('admin.poa.mproblemas.pdeterminantes.forms.fields')

            <button type="submit" class="btn-pdeterminante-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-pdeterminante-{{$pdeterminante->id}}">

                <i class="far fa-save"></i>
                Actualizar Determinante

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('pdeterminantes.show',$pdeterminante->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['pdeterminantes'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>