<div class="card bd-callout bd-callout-{{ $class_form_create_institucion or 'form' }}">
  <div class="card-header">
    Formulario para el Registro de un Nuevo responsable.
  </div>
  <div class="card-body">

      {{-- INI form --}}
      {!! Form::open(['route' => 'responsables.store', 'method' => 'POST', 'id'=>'form-responsable-create', 'class'=>'form-signin']) !!}
            
            {{-- partial con el formulario y campos --}}
            @include('admin.poa.responsables.forms.fields')

            <button type="submit" class="btn-responsable-create btn btn-primary btn-block" value="create" data-id="create" id="btn-create-responsable">

                <i class="far fa-save"></i>
                Registrar Responsables

            </button>

            <button type="reset" class="btn-responsable-reset btn btn-info btn-block" value="Reset">

                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Reset 

            </button>

            {{-- INI Menu modelos realcionados --}}
            <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
              
              <a class="btn btn-dark w-100" href="{{ route('responsables.index') }}" role="button">
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