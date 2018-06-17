@if($direccions->count()>0)

    <ul class="list-group">

        @foreach($direccions as $direccion)

            <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-1">

                <strong class="pr-1">{{ $loop->iteration or '' }}</strong>

                @include('poa.direccions.show.direccion')

            </li>

        @endforeach

    </ul>

@endif