@if($pdeterminantes->count()>0)

    <ul class="list-group">

        @foreach($pdeterminantes as $pdeterminante)

              <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-0">
                {{ $loop->iteration or '' }}. {{$pdeterminante->determinante or ''}}
                <span class="badge badge-light badge-pill">
                    @component('admin.poa.elementos.botones.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('pdeterminantes.show',$pdeterminante->id))
                        @slot('icon','mostrar')
                    @endcomponent
                </span>
              </li>
            
        @endforeach

    </ul>

@endif