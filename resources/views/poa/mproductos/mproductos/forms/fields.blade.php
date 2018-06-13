@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mobjetivo_id">Objetivo</label>
    </div>
    {!! Form::select('mobjetivo_id',$mobjetivos_list,old('mobjetivo_id'),['class' => 'form-control','id'=>'mobjetivo_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('producto', old('producto'), ['class' => 'form-control','placeholder'=>'Productos','id'=>'producto']); !!}
    <label for="producto">Productos</label>
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
