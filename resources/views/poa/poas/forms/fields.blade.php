@include('admin.elements.forms.errors')

@include('admin.elements.messeges.oper_ok')

<div class="form-label-group pb-1">
                
    {!! Form::select('institucion_id',$institucions_list,old('institucion_id'),['class' => 'form-control','autofocus','placeholder' => 'Institución','title'=>'Institución']); !!}

</div>

<div class="form-label-group pb-1">
    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control','placeholder'=>'Descripción','id'=>'descripcion']); !!}
    <label for="descripcion">Descripción</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('area', old('area'), ['class' => 'form-control','id'=>'area','placeholder'=>'Área']); !!}
    <label for="area">Área</label>

</div>

<div class="form-label-group pb-1">

    {!! Form::text('estrategia', old('estrategia'), ['class' => 'form-control','id'=>'estrategia','placeholder'=>'Estratégia']); !!}
    <label for="estrategia">Estratégia</label>

</div>

<div class="form-label-group pb-1">
    {!! Form::text('periodo', old('periodo'), ['class' => 'form-control datepicker','placeholder'=>'Período','id'=>'periodo','required','readonly']); !!}
    <label for="periodo">Período</label>
</div>

{{-- field hidden for user_id --}}
{!! Form::hidden ('user_id', Auth::user()->id) !!}


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
            format: "yyyy",
            language: "es",
            startView: 2,
		    minViewMode: 2,
		    maxViewMode: 2,
		    autoclose: true
        });

    </script>

@endsection

