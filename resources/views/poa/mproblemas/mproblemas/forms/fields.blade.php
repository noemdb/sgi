@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

{{-- @if(empty($poa_id)) --}}
@empty($poa)

    <div class="input-group mb-3">
         <div class="input-group-prepend">
            <label class="input-group-text" for="poa_id">&nbsp;&nbsp;&nbsp;&nbsp;POA&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        {!! Form::select('poa_id',$poa_list,old('poa_id'),['class' => 'form-control','id'=>'poa_id','placeholder' => 'Seleccionar','title'=>'POA']); !!}
    </div>

@endempty

{{-- @else --}}
@isset($poa)
    <div class="form-label-group pb-1">

        {!! Form::hidden ('poa_id', $poa_id) !!}

        <div class="alert alert-primary mb-1" title="{{$poa_id or ''}}">
            Institución:  {{$poa->institucion->nombre or ''}}
            <br>
        </div>

        <div class="alert alert-secondary mt-0" title="{{$poa_id or ''}}">
            POA: <br>
            {{$poa_list[$poa_id] or ''}}
            {{$poa->descripcion or ''}}
        </div>

    </div>
@endisset
{{-- @endif --}}

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="direccion_id">Dirección</label>
    </div>
    {!! Form::select('direccion_id',$direccion_list,old('direccion_id'),['class' => 'form-control','id'=>'direccion_id','placeholder' => 'Seleccionar','title'=>'Dirección']); !!}
</div>

<div class="form-label-group pb-1">
    {!! Form::text('problema', old('problema'), ['class' => 'form-control','placeholder'=>'Problema','id'=>'problema']); !!}
    <label for="problema">Problema</label>

</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection

