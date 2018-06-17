<table class="table table-striped table-bordered table-sm w-100 table-responsive">
    <tbody>

        <tr>
            <td>

                <table class="table table-striped table-bordered table-sm">

                    <thead class="">

                        <tr class="table-active">
                            <th style="width: 20%">Problema</th>
                            <th style="width: 20%">Determinantes</th>
                            <th style="width: 20%">Causa/Efecto</th>
                            <th style="width: 20%">Objetivos</th>
                            <th style="width: 20%">Productos</th>
                        </tr>

                    </thead>

                    @foreach($mproblemas as $mproblema)

                        <tbody>

                            <tr>

                                <td {{-- class="align-middle"  --}}style="width: 20%">
                                    {{ $loop->iteration or '' }}
                                    {{ $mproblema->problema or ''}}
                                </td>

                                <td {{-- class="align-middle" --}} style="width: 20%">

                                    @if($mproblema->pdeterminantes->count()>0)
                                        @php($pdeterminantes = $mproblema->pdeterminantes)
                                        @include('poa.mproblemas.pdeterminantes.show.list')
                                    @endif

                                    @component('elements.buttons.edit')
                                        @slot('title','Nuevo')
                                        @slot('btnclass','link')
                                        @slot('align','right')
                                        @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                                        @slot('icon','nuevo')
                                    @endcomponent

                                </td>

                                <td {{-- class="align-middle" --}} style="width: 20%">
                                    @if($mproblema->pcausaefectos->count()>0)
                                        @php($pcausaefectos = $mproblema->pcausaefectos)
                                        @include('poa.mproblemas.pcausaefectos.show.list')
                                    @endif

                                    @component('elements.buttons.edit')
                                        @slot('title','Nuevo')
                                        @slot('btnclass','link')
                                        @slot('align','right')
                                        @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                                        @slot('icon','nuevo')
                                    @endcomponent

                                </td>

                                <td {{-- class="align-middle" --}} style="width: 20%">

                                    @if($mproblema->mobjetivos->count()>0)
                                        @php($mobjetivos = $mproblema->mobjetivos)
                                        @include('poa.mobjetivos.mobjetivos.show.list',['not_product'=>true])
                                    @endif

                                    @component('elements.buttons.edit')
                                        @slot('title','Nuevo')
                                        @slot('btnclass','link')
                                        @slot('align','right')
                                        @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                                        @slot('icon','nuevo')
                                    @endcomponent

                                </td>

                                <td {{-- class="align-middle" --}} style="width: 20%">

                                    @if($mproblema->mobjetivos->count()>0)
                                        @php($mobjetivos = $mproblema->mobjetivos)
                                        @foreach($mobjetivos as $mobjetivo)
                                            @php($loop_obj = $loop->iteration.'.')
                                            @if($mobjetivo->mproductos->count()>0)
                                                @php($mproductos = $mobjetivo->mproductos)
                                                @include('poa.mproductos.mproductos.show.list')
                                                <div class="dropdown-divider"></div>
                                            @endif
                                        @endforeach
                                    @endif

                                    @component('elements.buttons.edit')
                                        @slot('title','Nuevo')
                                        @slot('btnclass','link')
                                        @slot('align','right')
                                        @slot('route',route('pdeterminante.createWithid',$mproblema->id))
                                        @slot('icon','nuevo')
                                    @endcomponent

                                </td>

                            </tr>

                        </tbody>

                    @endforeach

                </table>

            </td>
        </tr>
    </tbody>
</table>

<div class="dropdown-divider"></div>


