<div class="container">

    <div class="row">
        <div class="col-sm p-1 text-secondary">
            <strong>Problema:</strong> {{$mproblema->problema or ''}}
        </div>
    </div>

    <div class="row alert alert-secondary p-1 mb-0">
        <div class="col-sm p-1">
            Objetivo
        </div>
        <div class="col-sm p-1">
            Indicadores
        </div>
        <div class="col-sm p-1">
            Verificadores
        </div>
        <div class="col-sm p-1">
            Supuestos
        </div>
    </div>


    @foreach($mobjetivos as $mobjetivo)

        {{-- @if($mobjetivo->mproductos->count()>0) --}}
            @php($mproductos = $mobjetivo->mproductos)
            {{-- @foreach($mproductos as $mproducto) --}}
                <div class="row pt-1">
                    <div class="col-sm p-1" title="Objetivo">
                        @php($loop_objetivos++)
                        {{ $loop_objetivos or '' }}.
                        {{ $mobjetivo->objetivo or ''}}
                        <br>
                        @component('poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent
                    </div>
                    <div class="col-sm p-1" title="Indicadores">
                        @foreach($mproductos as $mproducto)
                            @if($mproducto->pindicadors->count()>0)
                                @php($pindicadors = $mproducto->pindicadors)
                                @include('poa.mproductos.pindicadors.show.list')
                            @endif
                        @endforeach
                        @component('poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent
                    </div>
                    <div class="col-sm p-1" title="Verificadores">
                        @foreach($mproductos as $mproducto)
                            @if($mproducto->pverificadors->count()>0)
                                @php($pverificadors = $mproducto->pverificadors)
                                @include('poa.mproductos.pverificadors.show.list')
                            @endif
                        @endforeach
                        @component('poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('pverificadors.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent
                    </div>
                    <div class="col-sm p-1" title="Supuestos">
                        @foreach($mproductos as $mproducto)
                            @if($mproducto->psupuestos->count()>0)
                                @php($psupuestos = $mproducto->psupuestos)
                                @include('poa.mproductos.psupuestos.show.list')
                            @endif
                        @endforeach
                        @component('poa.elementos.botones.edit')
                            @slot('title','Nuevo')
                            @slot('btnclass','link')
                            @slot('align','right')
                            {{-- @slot('route',route('psupuestos.createWithid',$mproducto->id)) --}}
                            @slot('icon','nuevo')
                        @endcomponent
                    </div>
                </div>
            {{-- @endforeach --}}
        {{-- @endif --}}
    @endforeach


    {{--
    <div class="row">
        <div class="col-sm-12">
            @component('poa.elementos.botones.edit')
                @slot('title','Nuevo')
                @slot('btnclass','link')
                @slot('align','right')
                @slot('icon','nuevo')
            @endcomponent
        </div>
    </div>
    --}}

    <div class="dropdown-divider"></div>

</div>

