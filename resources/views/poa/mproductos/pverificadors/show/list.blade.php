@if($pverificadors->count()>0)

    <ul class="list-group">

        {{-- <li class="list-group-item list-group-item-secondary">
            <strong>Producto:</strong> {{$mproducto->producto or ''}}
        </li> --}}

        @foreach($pverificadors as $pverificador)

              <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                {{-- {{ $loop->iteration or '' }}.  --}}{{$pverificador->verificador or ''}}
                <span class="badge badge-light badge-pill">
                    @component('elements.buttons.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('pdeterminantes.show',$pverificador->id))
                        @slot('icon','mostrar')
                    @endcomponent
                </span>
              </li>

        @endforeach

    </ul>

@endif