@if($mactividads->count()>0)

    <ul class="list-group p-1">

        @foreach($mactividads as $mactividad)

            <li class="list-group-item d-flex justify-content-between align-items-center pr-1">

                <span class="pr-1">{{ $loop->iteration or '' }}</span>

                <ul class="list-group p-1">
                    <li class="list-group-item p-1">
                        Descripción: {{$mactividad->descripcion or ''}}
                    </li>
                    <li class="list-group-item p-1">
                        Responsable: {{$mactividad->responsable->nombre or ''}}
                    </li>
                    @isset($mactividad->ractividada_id)

                        <li class="list-group-item">
                            Reprogramada: {{$mactividad->ractividada_id or ''}}
                        </li>

                    @endisset
                    <li class="list-group-item  p-1">
                        Ubicación: {{$mactividad->ubicaion or ''}}
                    </li>

                </ul>


                {{-- {{ $loop->iteration or '' }}. {{$mactividad->descripcion or ''}}<br> --}}

                {{-- Ubicaión: {{$mactividad->ubicaion or ''}} --}}

                <span class="badge badge-light badge-pill">

                    @component('elements.buttons.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('mactividads.show',$mactividad->id))
                        @slot('icon','mostrar')
                    @endcomponent

                </span>

            </li>

        @endforeach

    </ul>

@endif