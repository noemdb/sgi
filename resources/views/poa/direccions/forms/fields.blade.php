@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="form-label-group pb-1">
                
    {!! Form::select('institucion_id',$institucions_list,old('institucion_id'),['class' => 'form-control','autofocus','placeholder' => 'Institución','title'=>'Institución']); !!}

</div>

<div class="form-label-group pb-1">

    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control','id'=>'nombre','placeholder'=>'Nombre']); !!}
    <label for="nombre">Nombre</label>

</div>

<div class="form-label-group pb-1">
    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control','placeholder'=>'Descripción','id'=>'descripcion']); !!}
    <label for="descripcion">Descripción</label>

</div>

{{-- field hidden for user_id --}}
{!! Form::hidden ('user_id', Auth::user()->id) !!}

@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection

