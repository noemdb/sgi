<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización de la Matriz de Problema.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($Mproblema,['route' => ['mproblemas.update', $Mproblema->id], 'method' => 'PUT', 'id'=>'form-update-mproblema_'.$Mproblema->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            {{-- @include('admin.poa.mproblemas.mproblemas.forms.fields') --}}
            @include('admin.poa.mproblemas.mproblemas.forms.fields')

            <button type="submit" class="btn-Mproblema-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-Mproblema-{{$Mproblema->id}}">

                <i class="far fa-save"></i>
                Actualizar Matriz de Problema

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('mproblemas.show',$Mproblema->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['mproblemas'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>