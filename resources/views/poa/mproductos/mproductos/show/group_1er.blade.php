<table class="table table-striped table-bordered table-sm">

    <caption style="caption-side: top;"><strong>Problema:</strong> {{$mproblema->problema or ''}}</caption>

    @foreach($mproductos as $mproducto)

        <thead class="">

            <tr class="table-active">
                {{-- <th rowspan="6" class="align-middle">{{ $loop->iteration or '' }}</th> --}}
                <th class="align-middle" colspan="2">
                    Producto
                    {{ $loop->iteration or '' }}.
                   {{ $mproducto->producto or ''}}
                </th>
            </tr>

        </thead>

        <tbody>

            {{-- INI indicadores --}}
            @if($mproducto->pindicadors->count()>0)

                @php($pindicadors = $mproducto->pindicadors)

                <tr>

                    <th class="align-middle">Indicadores</th>

                    <td>

                        @include('poa.mproductos.pindicadors.show.list')

                        @component('admin.poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent

                    </td>

                </tr>

            @endif
            {{-- FIN indicadores --}}

            {{-- INI Medio de Verificacion --}}
            @if($mproducto->pverificadors->count()>0)

                @php($pverificadors = $mproducto->pverificadors)

                <tr>

                    <th class="align-middle">Verificación</th>

                    <td>

                        @include('poa.mproductos.pverificadors.show.list')

                        @component('admin.poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent

                    </td>

                </tr>

            @endif
            {{-- FIN Medio de Verificación --}}

            {{-- INI Supuestos --}}
            @if($mproducto->psupuestos->count()>0)

                @php($psupuestos = $mproducto->psupuestos)

                <tr>

                    <th class="align-middle">Supuestos</th>

                    <td>

                        @include('poa.mproductos.psupuestos.show.list')

                        @component('admin.poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent

                    </td>

                </tr>

            @endif
            {{-- FIN Medio de Verificación --}}

        </tbody>

        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>

    @endforeach



</table>

<div class="dropdown-divider"></div>