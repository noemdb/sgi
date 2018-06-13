@php
    $class = [
        'count'=>'',
        'mproducto'=>'col-sm p-0 ',
        'mactividads'=>'col-sm p-0 ',
        'pindicadors'=>'col-sm p-0 ',
        'ubicaion'=>'col-sm p-0 ',
        'afrecuencia'=>'col-sm p-0 ',
        'responsable'=>'col-sm p-0 ',
        'programa'=>'col-sm p-0 ',
        'asignacion'=>'col-sm p-0 ',
        'tiempo'=>'col-sm p-0 ',
        'created_at'=>'d-none d-xl',
        'updated_at'=>'d-none d-xl',
        'accion'=>'',
    ]
@endphp

<div class="container p-1">

    <div class="row p-1">
        <div class="col-sm p-1 text-secondary">
            <strong>Problema:</strong> {{$mproblema->problema or ''}}
        </div>
    </div>

    <div class="row p-1 ml-1">
        @php($loop_objetivos++)
        <div class="col-sm p-1 text-secondary">
            <strong>Objetivo:</strong>
            {{ $mobjetivo->objetivo or ''}}
        </div>
    </div>

    @foreach($mobjetivos as $mobjetivo)

        @if($mobjetivo->mproductos->count()>0)
            @php($mproductos = $mobjetivo->mproductos)
        @endif

        <div class="row alert alert-secondary p-0 m-0">
            <div class="{{$class['mproducto'] or ''}}">
                Productos
            </div>
            <div class="{{$class['mactividads'] or ''}}">
                Actividades
            </div>
            <div class="{{$class['pindicadors'] or ''}}">
                Indicadores
            </div>
            <div class="{{$class['ubicaion'] or ''}}">
                Ubicación
            </div>
            <div class="{{$class['afrecuencia'] or ''}}">
                Frecuencia
            </div>
            <div class="{{$class['responsable'] or ''}}">
                Responsable
            </div>
            <div class="{{$class['programa'] or ''}}" title="Programación Presupuestaria">
                Programa
            </div>
            <div class="{{$class['asignacion'] or ''}}" title="Asignación Presupuestaria">
                Asignación
            </div>
            <div class="{{$class['tiempo'] or ''}}" title="Tiempo">
                <div class="container pr-0 mr-0">
                    <div class="row pr-0 mr-0">
                        <div class="col-sm pr-0 mr-0">{{$mactividad->nomfrecuencia or ""}}</div>
                    </div>
                    <div class="row pr-0 mr-0">
                        <div class="col-sm  border-bottom align-items-center text-nowrap">
                            <span class="text text-success" title="Lapso">Lapso</span>/<span class="text text-primary" title="Cantidad">Canti.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row  p-0 m-0">
            <div class="{{$class['mproducto'] or ''}}" title="Productos">
                @foreach($mproductos as $mproducto)
                    @include('poa.mproductos.mproductos.show.list')
                @endforeach
                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>

            <div class="{{$class['mactividads'] or ''}}" title="Actividades">
                @foreach($mproductos as $mproducto)
                    @if($mproducto->mactividads->count()>0)
                        @php($mactividads = $mproducto->mactividads)
                        @include('poa.mactividads.mactividads.show.listsimple')
                    @endif
                @endforeach
                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('psupuestos.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>

            <div class="{{$class['pindicadors'] or ''}}" title="Indicadores">
                @foreach($mproductos as $mproducto)
                    @if($mproducto->pindicadors->count()>0)
                        @php($pindicadors = $mproducto->pindicadors)
                        @foreach($pindicadors as $pindicador)
                            {{$loop->iteration or ''}}.
                            {{$pindicador->indicador or ''}}<br>
                        @endforeach
                        {{-- @include('poa.mproductos.pindicadors.show.list') --}}
                    @endif
                @endforeach
                @component('admin.poa.elementos.botones.edit')
                    @slot('title','Nuevo')
                    @slot('btnclass','link')
                    @slot('align','right')
                    {{-- @slot('route',route('pindicadors.createWithid',$mproducto->id)) --}}
                    @slot('icon','nuevo')
                @endcomponent
            </div>

            <div class="{{$class['ubicaion'] or ''}}" title="Ubicación">
                @if($mproducto->mactividads->count()>0)
                    @php($mactividads = $mproducto->mactividads)
                    @foreach($mactividads as $mactividad)
                        {{$mactividad->ubicaion or ''}}<br>
                    @endforeach
                    {{-- @include('poa.mproductos.mproductos.show.list') --}}
                @endif
            </div>

            <div class="{{$class['afrecuencia'] or ''}}" title="Frecuencia">
                @if($mproducto->mactividads->count()>0)
                    @php($mactividads = $mproducto->mactividads)
                    @foreach($mactividads as $mactividad)
                        {{$mactividad->nomfrecuencia or ''}}<br>
                    @endforeach
                @endif
            </div>

            <div class="{{$class['responsable'] or ''}}" title="Responsable">
                @if($mproducto->mactividads->count()>0)
                    @php($mactividads = $mproducto->mactividads)
                    @foreach($mactividads as $mactividad)
                        {{$mactividad->responsable->nombre or ''}}<br>
                    @endforeach
                @endif
            </div>

            <div class="{{$class['programa'] or ''}}" title="Programa">
                @if($mobjetivo->presupuestarias->count()>0)
                    @php($presupuestarias = $mobjetivo->presupuestarias)
                    @foreach($presupuestarias as $presupuestaria)
                        {{$presupuestaria->programa or ''}}<br>
                    @endforeach
                @endif
            </div>

            <div class="{{$class['asignacion'] or ''}}" title="Asignaición">
                @if($mobjetivo->presupuestarias->count()>0)
                    @php($presupuestarias = $mobjetivo->presupuestarias)
                    @foreach($presupuestarias as $presupuestaria)
                        {{$presupuestaria->asignacion or ''}}<br>
                    @endforeach
                @endif
            </div>

            <div class="{{$class['tiempo'] or ''}}" title="Tiempo">

                @if($mproducto->mactividads->count()>0)
                    @php($mactividads = $mproducto->mactividads)
                    <div class="container pr-0 mr-0">

                        @if($mactividad->afrecuencias->count()>0)

                            @php($afrecuencias = $mactividad->afrecuencias)
                            @php($arr_frec = $mactividad->afrecuencias->sortByDesc('id')->toArray())

                            <div class="row pr-0 mr-0">
                                @for($i=0;$i<$mactividad->frecuencia;++$i)
                                    @php($n=$i+1)
                                    <div class="col-sm-{{ (12 / $mactividad->frecuencia) }} align-middle pr-0 mr-0" align="center">
                                        <small class="text text-nowrap text-success">{{$n}}</small>
                                            <br>
                                        <small class="text text-nowrap text-primary">
                                            @foreach($afrecuencias as $afrecuencia)
                                                @if($afrecuencia->lapso==$n)
                                                    {{$afrecuencia->lapso}}
                                                @endif
                                            @endforeach
                                        </small>
                                    </div>
                                @endfor
                            </div>

                        @endif
                    </div>

                    <div class="badge badge-light badge-pill">
                        @component('admin.poa.elementos.botones.edit')
                            @slot('title','Mostrar')
                            @slot('btnclass','link')
                            @slot('route',route('mactividads.show',$mactividad->id))
                            @slot('icon','nuevo')
                        @endcomponent
                    </div>
                @endif
            </div>

        </div>

    @endforeach

    <div class="dropdown-divider"></div>

</div>

