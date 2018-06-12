<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Dirección.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($direccion,['route' => ['direccions.update', $direccion->id], 'method' => 'PUT', 'id'=>'form-update-poa_'.$direccion->id, 'role'=>'form']) !!}
            
            {{-- partial con el formulario y campos --}}
            @include('admin.poa.direccions.forms.fields')

            <button type="submit" class="btn-direccion-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-direccion-{{$direccion->id}}">

                <i class="far fa-save"></i>
                Actualizar Dirección

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
              
              <a class="btn btn-dark w-100" href="{{ route('direccions.show',$direccion->id) }}" role="button">
                Mostrar
                <i class="fas fa-warehouse"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}    
      {{-- FIN form --}}

  </div>
</div>