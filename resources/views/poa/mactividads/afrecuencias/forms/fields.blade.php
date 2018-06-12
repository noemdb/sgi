@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

{{-- <div class="input-group mb-3"> --}}
     {{-- <div class="input-group-prepend"> --}}
        {{-- <label class="input-group-text" for="mactividad_id">Actividad</label> --}}
    {{-- </div>            --}}
    {{-- {!! Form::select('mactividad_id',$mactividads_list,old('mactividad_id'),['class' => 'form-control','id'=>'mactividad_id','placeholder' => 'Seleccionar','title'=>'Actividad']); !!} --}}
{{-- </div> --}}

{{-- <div class="input-group mb-3"> --}}
     {{-- <div class="input-group-prepend"> --}}
        {{-- <label class="input-group-text" for="lapso">Lapso</label> --}}
    {{-- </div> --}}
    {{-- {{ Form::selectRange('lapso', 1,$afrecuencia->mactividad->frecuencia,old('lapso'), ['class' => 'form-control','readonly'=>'readonly', 'id'=>'lapso', 'placeholder'=>'Seleccionar', 'title'=>'Frecuencia']) }} --}}
    {{-- {!! Form::select('lapso',$lapsos_list,old('lapso'),['class' => 'form-control','id'=>'lapso','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!} --}}
{{-- </div> --}}

<div class="form-label-group pb-1">
    {{-- {!! Form::text('mactividad_id', old('mactividad_id'), ['class' => 'form-control','placeholder'=>'Actividad','id'=>'mactividad_id','readonly'=>'readonly']); !!} --}}
    {{ Form::hidden('mactividad_id', old('mactividad_id')) }}
    {{ Form::textarea('mactividad', $afrecuencia->mactividad->descripcion, ['class' => 'form-control','placeholder'=>'Actividad','title'=>'Actividad','id'=>'mactividad_id','size' => '30x3','readonly'=>'readonly']) }}
    {{-- <label for="mactividad_id">Actividad</label> --}}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('lapso', old('lapso'), ['class' => 'form-control','placeholder'=>'Lapso','id'=>'lapso','readonly'=>'readonly']); !!}
    <label for="lapso">Lapso</label>
</div>

<div class="form-label-group pb-1">
    {!! Form::text('cantidad', old('cantidad'), ['class' => 'form-control','placeholder'=>'Cantidad','id'=>'cantidad']); !!}
    <label for="cantidad">Cantidad</label>
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
