@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mobjetivo_id">Objetivo</label>
    </div>           
    {!! Form::select('mobjetivo_id',$mobjetivos_list,old('mobjetivo_id'),['class' => 'form-control','id'=>'mobjetivo_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control','placeholder'=>'Descripción','id'=>'descripcion']); !!}
    <label for="descripcion">Descripción</label>
</div>

<div class="form-label-group pb-1">
    {!! Form::text('programa', old('programa'), ['class' => 'form-control','placeholder'=>'Programa','id'=>'programa']); !!}
    <label for="programa">Programa</label>
</div>

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mactividad_id">Asignación</label>
    </div>           
    {!! Form::select('asignacion',$asignacion_list,old('asignacion'),['class' => 'form-control','id'=>'asignacion','placeholder' => 'Seleccionar','title'=>'Asignación']); !!}
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
