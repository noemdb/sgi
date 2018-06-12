<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Frecuencias
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($afrecuencia,['route' => ['afrecuencias.update', $afrecuencia->id], 'method' => 'PUT', 'id'=>'form-update-presupuestaria_'.$afrecuencia->id, 'role'=>'form']) !!}
            
            {{-- partial con el formulario y campos --}}
            @include('admin.poa.mactividads.afrecuencias.forms.fields')

            <button type="submit" class="btn-afrecuencia-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-afrecuencia-{{$afrecuencia->id}}">

                <i class="far fa-save"></i>
                Actualizar Frecuencia

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
              
              <a class="btn btn-dark w-100" href="{{ route('afrecuencias.show',$afrecuencia->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['btn_frecuencias'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}    
      {{-- FIN form --}}

  </div>
</div>