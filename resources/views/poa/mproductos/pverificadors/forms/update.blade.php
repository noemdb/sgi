<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Supuesto
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($pverificador,['route' => ['pverificadors.update', $pverificador->id], 'method' => 'PUT', 'id'=>'form-update-presupuestaria_'.$pverificador->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.mproductos.pverificadors.forms.fields')

            <button type="submit" class="btn-pverificador-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-pverificador-{{$pverificador->id}}">

                <i class="far fa-save"></i>
                Actualizar Verificador

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('pverificadors.show',$pverificador->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['pverificadors'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>