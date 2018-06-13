@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mproducto_id">Producto</label>
    </div>
    {!! Form::select('mproducto_id',$mproductos_list,old('mproducto_id'),['class' => 'form-control','id'=>'mproducto_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('indicador', old('indicador'), ['class' => 'form-control','placeholder'=>'Indicador','id'=>'indicador']); !!}
    <label for="indicador">Indicador</label>
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
