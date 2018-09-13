<ul class="list-group">
	@foreach($mactividads as $mactividad)
	    <li class="list-group-item text-overflow" title="{{ $mactividad->descripcion or 'default' }}">
	        <span class="text-{{ $mactividad->class or 'default' }}">
	            <b><i class="fa fa-tasks fa-fw"></i> {{ $mactividad->responsable->nombre or 'default' }}</b>
	            <span class="pull-right text-muted small"> <em>{{ $mactividad->created_at->diffForHumans() }}</em></span>
	        </span>
	        <div class="text-{{-- {{ $mactividad->class or 'default' }} --}} text-overflow">
	        	{{ (isset($show_task)) ? $mactividad->descripcion : '' }}
	        </div>
	    </li>
	@endforeach
</ul>

{{-- <a href="{{ route('tasks.index') }}" class="btn btn-link">Mas...</a> --}}
