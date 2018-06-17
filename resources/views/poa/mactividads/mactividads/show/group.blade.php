<div class="container">

    <div class="row">
        <div class="col-sm p-1 text-secondary">
            <strong>Problema:</strong> {{$mproblema->problema or ''}}
        </div>
    </div>

    <div class="row alert alert-secondary p-1 mb-0">
        <div class="col-sm-3 p-1">
            Productos
        </div>
        <div class="col-sm-9 p-1">
            Actividades
        </div>
    </div>

    @foreach($mactividads as $mactividad)
        <div class="row pt-1">
            <div class="col-sm-3 p-1" title="Productos">
                {{ $loop->iteration or '' }}.
                {{ $mproducto->producto or ''}}
                <br>
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('mobjetivos.createWithid',$mproblema->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>
            <div class="col-sm-9 p-1" title="Actividades">
                @include('poa.mactividads.mactividads.show.listfull')
                @component('elements.buttons.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>
        </div>
    @endforeach

    {{--
    <div class="row">
        <div class="col-sm-12">
            @component('elements.buttons.edit')
                @slot('title','Nuevo')
                @slot('btnclass','link')
                @slot('align','right')
                @slot('icon','nuevo')
            @endcomponent
        </div>
    </div>
    --}}

</div>

{{-- <div class="dropdown-divider"></div> --}}