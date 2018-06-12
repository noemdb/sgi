@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mproducto_id">Producto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </div>           
    {!! Form::select('mproducto_id',$mproductos_list,old('mproducto_id'),['class' => 'form-control','id'=>'mproducto_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="responsable_id">Responsable</label>
    </div>           
    {!! Form::select('responsable_id',$responsables_list,old('responsable_id'),['class' => 'form-control','id'=>'responsable_id','placeholder' => 'Seleccionar','title'=>'Responsable']); !!}
</div>

<div class="form-label-group pb-1">
    {{-- {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control','placeholder'=>'Descripción','id'=>'descripcion']); !!} --}}
    {{-- <label for="descripcion">Descripción</label> --}}
    {{ Form::textarea('descripcion', old('descripcion'), ['class' => 'form-control','placeholder'=>'Descripción','id'=>'descripcion','size' => '30x3']) }}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('ubicaion', old('ubicaion'), ['class' => 'form-control','placeholder'=>'Actividades','id'=>'ubicaion']); !!}
    <label for="ubicaion">Ubicaión</label>
</div>

{{-- 
<div class="form-label-group pb-1">
        {!! Form::text('finicial', old('finicial'), ['class' => 'form-control datepicker','placeholder'=>'Fecha Inicial','id'=>'finicial','required']); !!}
    <label for="finicial">Fecha Inicial</label>
</div>

<div class="form-label-group pb-1">
    {!! Form::text('ffinal', old('ffinal'), ['class' => 'form-control datepicker','placeholder'=>'Fecha Final','id'=>'ffinal','required']); !!}
    <label for="ffinal">Fecha Final</label>
</div> 
--}}

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="frecuencia">Frecuencia</label>
    </div>
    {{-- {{ Form::selectRange('frecuencia', 1, 15,old('responsable_id'), ['class' => 'form-control', 'id'=>'frecuencia', 'placeholder'=>'Seleccionar', 'title'=>'Frecuencia']) }}          --}}
    {!! Form::select('frecuencia',$frecuencias_list,old('frecuencia'),['class' => 'form-control','id'=>'frecuencia','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css') }}" rel="stylesheet">

@endsection

@section('scripts')
    @parent

    <script src="{{ asset("vendor/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js") }}"></script>
    <script src="{{asset('vendor/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.es.min.js')}}"></script>

    <script type="text/javascript">

        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            autoclose: true,
            startView: 2
        });

    </script>

@endsection
