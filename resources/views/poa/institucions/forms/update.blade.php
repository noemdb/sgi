<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Institución.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($institucion,['route' => ['institucions.update', $institucion->id], 'method' => 'PUT', 'id'=>'form-update-user_'.$institucion->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.institucions.forms.fields')

            <button type="submit" class="btn-institucion-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-institucion-{{$institucion->id}}">

                <i class="far fa-save"></i>
                Actualizar Institución

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('institucions.show',$institucion->id) }}" role="button">
                Mostrar
                <i class="fas fa-building"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>