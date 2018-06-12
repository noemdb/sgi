@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="form-label-group pb-1">
    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control','autofocus','placeholder'=>'Nombre de la Institución','id'=>'nombre']); !!}
    {{-- <input type="text" id="nombre" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre de Usuario" value="{{ old('nombre') }}"> --}}
    <label for="nombre">Nombre de la Institución</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control','id'=>'descripcion','placeholder'=>'Descripción de la Institución']); !!}
    {{-- <input type="text" id="descripcion" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid ' : '' }}" placeholder="descripcion" value="{{ old('descripcion') }}"> --}}
    <label for="descripcion">Descripción de la Institución</label>

</div>

@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection

