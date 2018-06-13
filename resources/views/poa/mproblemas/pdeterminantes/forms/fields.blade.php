@include('elements.forms.errors')

@include('elements.messeges.oper_ok')

@if(empty($mproblema_id))

	<div class="input-group mb-3">
	     <div class="input-group-prepend">
	        <label class="input-group-text" for="mproblema_id">Problema</label>
	    </div>
	    {!! Form::select('mproblema_id',$mproblemas_list,old('mproblema_id'),['class' => 'form-control','id'=>'mproblema_id','placeholder' => 'Seleccionar','title'=>'Problema']); !!}
	</div>

@else

	<div class="form-label-group pb-1">

		{!! Form::hidden ('mproblema_id', $mproblema_id) !!}

		<div class="alert alert-secondary">Problema: <br>
	    	{{$mproblemas_list[$mproblema_id]}}
	    </div>

	</div>

@endif

<div class="form-label-group pb-1">
    {!! Form::text('determinante', old('determinante'), ['class' => 'form-control','placeholder'=>'Determinante','id'=>'determinante']); !!}
    <label for="determinante">Determinante</label>
</div>


@section('stylesheet')
    @parent

    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

@endsection
