@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mproducto_id">Producto</label>
    </div>
    {!! Form::select('mproducto_id',$mproductos_list,old('mproducto_id'),['class' => 'form-control','id'=>'mproducto_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('verificador', old('verificador'), ['class' => 'form-control','placeholder'=>'Verificador','id'=>'verificador']); !!}
    <label for="verificador">Verificador</label>
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
