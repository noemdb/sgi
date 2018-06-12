<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Actividad
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($mactividad,['route' => ['mactividads.update', $mactividad->id], 'method' => 'PUT', 'id'=>'form-update-presupuestaria_'.$mactividad->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.mactividads.mactividads.forms.fields')

            <button type="submit" class="btn-mactividad-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-mactividad-{{$mactividad->id}}">

                <i class="far fa-save"></i>
                Actualizar Actividad

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mactividads.show',$mactividad->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['mmactividads'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>