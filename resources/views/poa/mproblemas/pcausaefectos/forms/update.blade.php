<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Causa/Efecto.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($pcausaefecto,['route' => ['pcausaefectos.update', $pcausaefecto->id], 'method' => 'PUT', 'id'=>'form-update-pcausaefecto_'.$pcausaefecto->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            {{-- @include('poa.mproblemas.pcausaefectos.forms.fields') --}}
            @include('poa.mproblemas.pcausaefectos.forms.fields')

            <button type="submit" class="btn-pcausaefecto-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-pcausaefecto-{{$pcausaefecto->id}}">

                <i class="far fa-save"></i>
                Actualizar Causa/Efecto

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('pcausaefectos.show',$pcausaefecto->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['pcausaefectos'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>