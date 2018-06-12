<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Objetivo.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($mobjetivo,['route' => ['mobjetivos.update', $mobjetivo->id], 'method' => 'PUT', 'id'=>'form-update-pcausaefecto_'.$mobjetivo->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            {{-- @include('admin.poa.mobjetivos.mobjetivos.forms.fields') --}}
            @include('admin.poa.mobjetivos.mobjetivos.forms.fields')

            <button type="submit" class="btn-mobjetivo-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-mobjetivo-{{$mobjetivo->id}}">

                <i class="far fa-save"></i>
                Actualizar Objetivo

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mobjetivos.show',$mobjetivo->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['mobjetivos'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>