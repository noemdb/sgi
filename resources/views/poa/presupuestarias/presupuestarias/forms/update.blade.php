<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Registro
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($presupuestaria,['route' => ['presupuestarias.update', $presupuestaria->id], 'method' => 'PUT', 'id'=>'form-update-presupuestaria_'.$presupuestaria->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('admin.poa.presupuestarias.presupuestarias.forms.fields')

            <button type="submit" class="btn-presupuestaria-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-presupuestaria-{{$presupuestaria->id}}">

                <i class="far fa-save"></i>
                Actualizar Registro Presupuestario

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('presupuestarias.show',$presupuestaria->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['mobjetivos'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>