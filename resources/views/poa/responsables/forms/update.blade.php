<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Responsable.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($responsable,['route' => ['responsables.update', $responsable->id], 'method' => 'PUT', 'id'=>'form-update-poa_'.$responsable->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.responsables.forms.fields')

            <button type="submit" class="btn-responsable-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-responsable-{{$responsable->id}}">

                <i class="far fa-save"></i>
                Actualizar Responsable

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('responsables.show',$responsable->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['responsables']}}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>