@if($mactividads->count()>0)

    <ul class="list-group p-1">

        {{-- <li class="list-group-item">

            <div class="text-secondary">
                <strong>Problema:</strong> 
                {{$mproblema->problema or ''}}                 
            </div>
                       
        </li> --}}

        @foreach($mactividads as $mactividad)

            <li class="list-group-item d-flex justify-content-between align-items-center pr-1">

                <span class="pr-1">{{ $loop->iteration or '' }}</span>

                <ul class="list-group p-1">
                    <li class="list-group-item p-1">
                        <strong>Descripción: </strong>
                        {{$mactividad->descripcion or ''}}
                    </li>
                    <li class="list-group-item p-1">
                        <strong>Responsable: </strong>
                        {{$mactividad->responsable->nombre or ''}}
                    </li>
                    @isset($mactividad->ractividada_id)

                        <li class="list-group-item">
                            <strong>Reprogramada: </strong>
                            {{$mactividad->ractividada_id or ''}}
                        </li>

                    @endisset
                    <li class="list-group-item  p-1">
                        <strong>Ubicación:</strong>
                        {{$mactividad->ubicaion or ''}}
                    </li>

                    <li class="list-group-item  p-1">
                        <strong>Fecha Inicial:</strong>                        
                        {{ (isset($mactividad->finicial)) ? Carbon\Carbon::parse($mactividad->finicial)->format('d-m-Y') : '' }}
                    </li>

                    <li class="list-group-item  p-1">
                        <strong>Fecha Final:</strong>
                        {{ (isset($mactividad->ffinal)) ? Carbon\Carbon::parse($mactividad->ffinal)->format('d-m-Y') : '' }}
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