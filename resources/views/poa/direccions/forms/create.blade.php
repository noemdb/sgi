<div class="card bd-callout bd-callout-{{ $class_form_create_institucion or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de un Nuevo direccion.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'direccions.store', 'method' => 'POST', 'id'=>'form-direccion-create', 'class'=>'form-signin']) !!}
            
            {{-- partial con el formulario y campos --}}
            @include('admin.poa.direccions.forms.fields')

            <button type="submit" class="btn-direccion-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-direccion">

                <i class="far fa-save"></i>
                Registrar Dirección

            </button>

            <button type="reset" class="btn-direccion-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset 

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
              
              <a class="btn btn-dark w-100" href="{{ route('direccions.index') }}" role="button">
                Mostrar
                <i class="fas fa-warehouse"></i>
              </a>

              <a class="btn btn-dark w-100" href="{{ route('institucions.index') }}" role="button">
                Mostrar
                <i class="fas fa-building"></i>
              </a>

            </div>
            {{-- FIN Menu modelos realcionados --}}


            
      
      {!! Form::close() !!}    
      {{-- FIN form --}}

  </div>
</div>