@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="form-label-group pb-1">
                
    {!! Form::select('direccion_id',$direccion_list,old('direccion_id'),['class' => 'form-control','autofocus','placeholder' => 'Dirección','title'=>'Dirección']); !!}

</div>

<div class="form-label-group pb-1">

    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control','id'=>'nombre','placeholder'=>'Nombre']); !!}
    <label for="nombre">Nombre</label>

</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection

