@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mactividad_id">Actividad</label>
    </div>           
    {!! Form::select('mactividad_id',$mactividads_list,old('mactividad_id'),['class' => 'form-control','id'=>'mactividad_id','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

<div class="input-group mb-3">
     <div class="input-group-prepend">
        <label class="input-group-text" for="mactividad_id">Estado&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </div>           
    {!! Form::select('estado',$estados_list,old('estado'),['class' => 'form-control','id'=>'estado','placeholder' => 'Seleccionar','title'=>'Objetivo']); !!}
</div>

{{-- field hidden for user_id --}}
{!! Form::hidden ('user_id', Auth::user()->id) !!}

@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
