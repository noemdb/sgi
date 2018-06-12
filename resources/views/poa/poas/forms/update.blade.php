<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del POA.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($poa,['route' => ['poas.update', $poa->id], 'method' => 'PUT', 'id'=>'form-update-poa_'.$poa->id, 'role'=>'form']) !!}
            
            {{-- partial con el formulario y campos --}}
            @include('admin.poa.poas.forms.fields')

            <button type="submit" class="btn-poa-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-poa-{{$poa->id}}">

                <i class="far fa-save"></i>
                Actualizar POA

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
              
              <a class="btn btn-dark w-100" href="{{ route('poas.show',$poa->id) }}" role="button">
                Mostrar
                <i class="fas fa-th"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}    
      {{-- FIN form --}}

  </div>
</div>