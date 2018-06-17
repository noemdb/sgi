@if($mactividads->count()>0)

    <ul class="list-group p-1">

        @foreach($mactividads as $mactividad)

            <li class="list-group-item d-flex justify-content-between align-items-center p-1" title="Descripción">

                {{-- <span class="pr-1"> --}}
                    {{ $loop->iteration or '' }}.
                {{-- </span> --}}

                {{$mactividad->descripcion or ''}}

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