<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Indicador
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($pindicador,['route' => ['pindicadors.update', $pindicador->id], 'method' => 'PUT', 'id'=>'form-update-pindicador_'.$pindicador->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mproductos.pindicadors.forms.fields')

            <button type="submit" class="btn-pindicador-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-pindicador-{{$pindicador->id}}">

                <i class="far fa-save"></i>
                Actualizar Indicador

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('pindicadors.show',$pindicador->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['pindicadors'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>