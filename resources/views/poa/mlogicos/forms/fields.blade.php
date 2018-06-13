@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

<div class="form-label-group pb-1">

    {!! Form::select('poa_id',$poas_list,old('poa_id'),['class' => 'form-control','autofocus','placeholder' => 'POAS','title'=>'POAS']); !!}

</div>

<div class="form-label-group pb-1">
    {!! Form::text('tipo', old('tipo'), ['class' => 'form-control','placeholder'=>'tipo','id'=>'tipo']); !!}
    <label for="tipo">Tipo</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('resumen', old('resumen'), ['class' => 'form-control','id'=>'resumen','placeholder'=>'Resumen']); !!}
    <label for="resumen">Resumen</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('indicadores', old('indicadores'), ['class' => 'form-control','id'=>'indicadores','placeholder'=>'Indicadores']); !!}
    <label for="indicadores">Indicadores</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('mverificacion', old('mverificacion'), ['class' => 'form-control','id'=>'mverificacion','placeholder'=>'Medios Verificación']); !!}
    <label for="mverificacion">Medios Verificación</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('supuestos', old('supuestos'), ['class' => 'form-control','id'=>'supuestos','placeholder'=>'Supuestos']); !!}
    <label for="supuestos">Supuestos</label>

</div>

{{-- field hidden for user_id --}}
{{-- {!! Form::hidden ('user_id', Auth::user()->id) !!} --}}

@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection

