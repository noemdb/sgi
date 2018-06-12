@if($mproductos->count()>0)

    <table class="table table-bordered table-sm {{-- table-hover --}}">
        <tbody>
            <tr>
                <td scope="col">

                    <div class="vertical-text text-center p-3 text-center" align="center">
                        <strong>Productos:</strong>                   
                    </div>  

                </td>
                <td scope="col">

                    <table class="table table-bordered table-sm {{-- table-hover --}}">

                        <tbody>

                            @foreach($mproductos as $mproducto)

                                <tr>
                                    <td>

                                        <span class="text-mobjetivos-mobjetivo-{{ $mobjetivo->id  or ''}}">
                                            {{-- [{{$mproducto->id}}] --}}
                                            <strong>{{ $loop->iteration or '' }}.</strong>
                                            {{$mproducto->producto or ''}}
                                        </span>

                                        @component('admin.poa.elementos.botones.edit')
                                            @slot('title','Mostrar')
                                            @slot('btnclass','link')
                                            @slot('route',route('mproductos.show',$mproducto->id))
                                            @slot('icon','mostrar')
                                        @endcomponent

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </td>
            </tr>
        </tbody>
    </table>

@endif



{{-- @isset($mproductos)

    <ul class="list-group">

        <li class="list-group-item list-group-item-secondary">Productos</li>

        @foreach($mproductos as $mproducto)

            <li class="list-group-item">

                <span class="text-mobjetivos-mobjetivo-{{ $mobjetivo->id  or ''}}">

                    <strong>{{ $loop->iteration or '' }}.</strong>
                    {{$mproducto->producto or ''}}
                </span>
                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Mostrar')
                    @slot('btnclass','link')
                    @slot('route',route('mproductos.show',$mproducto->id))
                    @slot('icon','mostrar')
                @endcomponent

            </li>

        @endforeach
        
    </ul>
    
@endisse --}}