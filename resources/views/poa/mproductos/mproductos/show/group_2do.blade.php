<table class="table table-striped table-bordered table-sm">

    <caption style="caption-side: top;"><strong>Problema:</strong> {{$mproblema->problema or ''}}</caption>

    <thead class="">

        <tr class="table-active">
            <th class="w-25">Producto</th>
            <th class="w-25">Indicadores</th>
            <th class="w-25">Verificación</th>
            <th class="w-25">Supuestos</th>
        </tr>

    </thead>

    @foreach($mproductos as $mproducto)

        <tbody>
            <th class="align-middle w-25">
                {{ $loop->iteration or '' }}.                                    
                {{ $mproducto->producto or ''}}
                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </th> 

            {{-- INI indicadores --}}
            <td class="w-25">
                @if($mproducto->pindicadors->count()>0)
                    @php($pindicadors = $mproducto->pindicadors)
                    {{-- {{$pindicadors}} --}}
                    @include('admin.poa.mproductos.pindicadors.show.list')
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('pverificadors.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </td>  
            {{-- FIN indicadores --}}

            {{-- INI pverificadors --}}
            <td class="w-25">
                @if($mproducto->pverificadors->count()>0)
                    @php($pverificadors = $mproducto->pverificadors)
                    @include('admin.poa.mproductos.pverificadors.show.list')
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('pverificadors.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </td>            
            {{-- FIN pverificadors --}}

            {{-- INI psupuestos --}}
            <td class="w-25">
                @if($mproducto->psupuestos->count()>0)
                    @php($psupuestos = $mproducto->psupuestos)
                    @include('admin.poa.mproductos.psupuestos.show.list')
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('psupuestos.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </td>
            {{-- FIN psupuestos --}}

        </tbody>

    @endforeach

</table>

<div class="dropdown-divider"></div>