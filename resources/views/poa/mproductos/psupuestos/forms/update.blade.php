<div class="card bd-callout bd-callout-{{ Session::get('class_oper') }}">
  <div class="card-header">
    Formulario para la actualización del Supuesto
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::model($psupuesto,['route' => ['psupuestos.update', $psupuesto->id], 'method' => 'PUT', 'id'=>'form-update-presupuestaria_'.$psupuesto->id, 'role'=>'form']) !!}

            {{-- partial con el formulario y campos --}}
            @include('poa.mproductos.psupuestos.forms.fields')

            <button type="submit" class="btn-psupuesto-update btn btn-primary btn-block" value="update" data-id="update" id="btn-update-psupuesto-{{$psupuesto->id}}">

                <i class="far fa-save"></i>
                Actualizar Producto

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

              <a class="btn btn-dark w-100" href="{{ route('psupuestos.show',$psupuesto->id) }}" role="button">
                Mostrar
                <i class="{{ $icon_menus['psupuestos'] or '' }}"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}

      {!! Form::close() !!}
      {{-- FIN form --}}

  </div>
</div>