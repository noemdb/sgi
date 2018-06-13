<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Estado
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($aestado,['route' => ['aestados.update', $aestado->id], 'method' => 'PUT', 'id'=>'form-update-pindicador_'.$aestado->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mactividads.aestados.forms.fields')

            <button type="submit" class="btn-aestado-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-aestado-{{$aestado->id}}">

                <i class="far fa-save"></i>
                Actualizar Estado

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('aestados.show',$aestado->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['aestados'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>