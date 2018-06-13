@if($pcausaefectos->count()>0)

    <ul class="list-group">

        @foreach($pcausaefectos as $pcausaefecto)

            <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-0">
                {{ $loop->iteration or '' }}. {{$pcausaefecto->causaefecto or ''}}
                <span class="badge badge-light badge-pill">
                    @component('poa.elementos.botones.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('pcausaefectos.show',$pcausaefecto->id))
                        @slot('icon','mostrar')
                    @endcomponent
                </span>
            </li>

        @endforeach

    </ul>

@endif