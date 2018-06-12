<div class="container">
    <div class="row alert alert-secondary p-1 mb-0">
        <div class="col-sm p-1">
            Problema
        </div>
        <div class="col-sm p-1">
            Determinantes
        </div>
        <div class="col-sm p-1">
            Causa/Efecto
        </div>
        <div class="col-sm p-1">
            Objetivos
        </div>
        <div class="col-sm p-1">
            Productos
        </div>
    </div>

    @foreach($mproblemas as $mproblema)

        <div class="row pt-1">
            <div class="col-sm p-1">

                {{ $loop->iteration or '' }}
                {{ $mproblema->problema or ''}}

            </div>

            <div class="col-sm p-1">

                @if($mproblema->pdeterminantes->count()>0)
                    @php($pdeterminantes = $mproblema->pdeterminantes)
                    @include('admin.poa.mproblemas.pdeterminantes.show.list')
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo Determinante')
                    @slot('btnclass','link')
                    @slot('align','right')
                    @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                    @slot('icon','nuevo')
                @endcomponent

            </div>

            <div class="col-sm p-1">

                @if($mproblema->pcausaefectos->count()>0)
                    @php($pcausaefectos = $mproblema->pcausaefectos)
                    @include('admin.poa.mproblemas.pcausaefectos.show.list')
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo Causa/Efecto')
                    @slot('btnclass','link')
                    @slot('align','right')
                    @slot('route',route('pcausaefecto.createWithid',$mproblema->id))
                    @slot('icon','nuevo')
                @endcomponent

            </div>
            <div class="col-sm p-1">
                @if($mproblema->mobjetivos->count()>0)
                    @php($mobjetivos = $mproblema->mobjetivos)
                    @include('admin.poa.mobjetivos.mobjetivos.show.list',['not_product'=>true])
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    @slot('route',route('mobjetivo.createWithid',$mproblema->id))
                    @slot('icon','nuevo')
                @endcomponent
            </div>
            <div class="col-sm p-1">
                @if($mproblema->mobjetivos->count()>0)
                    @php($mobjetivos = $mproblema->mobjetivos)
                    @foreach($mobjetivos as $mobjetivo)
                        @php($loop_obj = $loop->iteration.'.')
                        @if($mobjetivo->mproductos->count()>0)
                            @php($mproductos = $mobjetivo->mproductos)
                            @include('admin.poa.mproductos.mproductos.show.list')
                            <div class="dropdown-divider"></div>
                        @endif
                    @endforeach
                @endif

                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                    @slot('icon','nuevo')
                @endcomponent
            </div>
        </div>

    @endforeach

    <div class="row p-1 mb-0">
        <div class="col-sm p-1">

            @component('admin.poa.elementos.botones.edit')
                @slot('title','Nuevo Problema')
                @slot('btnclass','link')
                @slot('align','right')
                @slot('route',route('mproblemas.createWithid',$mproblema->poa_id))
                @slot('icon','nuevo')
            @endcomponent

        </div>

    </div>

</div>



<div class="dropdown-divider"></div>


