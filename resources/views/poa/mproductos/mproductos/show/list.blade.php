@if($mproductos->count()>0)

    <ul class="list-group">

        @foreach($mproductos as $mproducto)

            <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-0">
                
                {{ $loop_obj or '' }}{{ $loop->iteration or '' }}. {{$mproducto->producto or ''}}

                <span class="badge badge-light badge-pill">

                    @component('elements.buttons.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('pdeterminantes.show',$mproducto->id))
                        @slot('icon','mostrar')
                    @endcomponent

                </span>

            </li>

        @endforeach

    </ul>

@endif
