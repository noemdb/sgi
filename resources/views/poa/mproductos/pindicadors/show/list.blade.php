@if($pindicadors->count()>0)
    <ul class="list-group">
        @foreach($pindicadors as $pindicador)
            <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                {{-- {{ $loop->iteration or '' }}. --}} 
                {{$pindicador->indicador or ''}}
                <span class="badge badge-light badge-pill">
                    @component('poa.elementos.botones.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('pdeterminantes.show',$pindicador->id))
                        @slot('icon','mostrar')
                    @endcomponent
                </span>
            </li>
        @endforeach
    </ul>
@endif