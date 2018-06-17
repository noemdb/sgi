@if($responsables->count()>0)

    <ul class="list-group">



        @foreach($responsables as $responsable)

        	@php ($n++)

            <li class="list-group-item d-flex justify-content-between align-items-center pl-2 pr-1">

                <strong class="pr-1">{{ $n or '' }}</strong>

                @include('poa.responsables.show.responsable')

            </li>

        @endforeach

    </ul>

@endif