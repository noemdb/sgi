<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Marco Lógico.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($mlogico,['route' => ['mlogicos.update', $mlogico->id], 'method' => 'PUT', 'id'=>'form-update-mlogico_'.$mlogico->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mlogicos.forms.fields')

            <button type="submit" class="btn-mlogico-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-mlogico-{{$mlogico->id}}">

                <i class="far fa-save"></i>
                Actualizar Marco Lógico

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mlogicos.show',$mlogico->id) }}" role="button">
                Mostrar
                <i class="fas fa-th"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>