@if($mactividads->count()>0)

    <ul class="list-group">

        @foreach($mactividads as $mactividad)

            <li class="list-group-item d-flex justify-content-between align-items-center p-1">

                <span class="pr-2">{{ $loop->iteration or '' }}</span>

                <ul class="list-group">
                    <li class="list-group-item p-1">

                        <div class="container pr-0 mr-0">
                            <div class="row pr-0 mr-0">
                                <div class="col-sm-4 font-weight-bold">Descripción</div>
                                @isset($mactividad->ractividada_id)
                                    {{-- <div class="col-sm">{{$mactividad->ractividada_id}}</div> --}}
                                @endisset
                                <div class="col-sm-8 font-weight-bold" align="center" title="{{$mactividad->frecuencia or ""}}">
                                    <div class="container pr-0 mr-0">
                                        <div class="row pr-0 mr-0">
                                            <div class="col-sm">Frecuencia {{$mactividad->nomfrecuencia or ""}}</div>
                                        </div>
                                        @if($mactividad->afrecuencias->count()>0)
                                        <div class="row pr-0 mr-0">
                                            <div class="col-sm  border-bottom align-items-center">
                                                <span class="text text-success">Lapso</span> /
                                                <span class="text text-primary">Cantidad</span>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}

                            <div class="row pr-0 mr-0">
                                <div class="col-sm-4" title="{{$mactividad->id or ''}}">
                                    {{$mactividad->descripcion or ''}}
                                </div>

                                @isset($mactividad->ractividada_id)
                                    <div class="col-sm">
                                        {{$mactividad->ractividada_id or ''}}
                                    </div>
                                @endisset

                                <div class="col-sm-8">

                                    <div class="container pr-0 mr-0">

                                        @if($mactividad->afrecuencias->count()>0)
                                            @php($afrecuencias = $mactividad->afrecuencias)
                                            @php($arr_frec = $mactividad->afrecuencias->sortByDesc('id')->toArray())

                                            {{-- {{ print_r($arr_frec) }} --}}

                                            <div class="row pr-0 mr-0">
                                                @for($i=0;$i<$mactividad->frecuencia;++$i)
                                                    @php($n=$i+1)
                                                    <div class="col-sm-{{ (12 / $mactividad->frecuencia) }} align-middle pr-0 mr-0" align="center">
                                                        <small class="text text-nowrap text-success">{{$n}}</small>
                                                            <br>
                                                        <small class="text text-nowrap text-primary">
                                                            @foreach($afrecuencias as $afrecuencia)
                                                                @if($afrecuencia->lapso==$n)
                                                                    <span title="{{$afrecuencia->id or ''}}">
                                                                        {{ $afrecuencia->lapso }}
                                                                    </span>
                                                                @endif
                                                            @endforeach
                                                        </small>
                                                    </div>
                                                @endfor
                                            </div>

                                            {{-- <div class="row pr-0 mr-0"> --}}

                                                {{-- @foreach($afrecuencias as $afrecuencia) --}}
                                                    {{-- <div class="col-sm align-middle border-right border-left" align="center"> --}}
                                                        {{-- <span class="text text-success"> --}}
                                                            {{-- {{ $afrecuencia->nomlapso or ''}} --}}
                                                        {{-- </span> --}}
                                                    {{-- </div> --}}
                                                {{-- @endforeach --}}

                                                {{-- {{$afrecuencia->findByFrecuencia($afrecuencia->mactividad_id)}}                                                                                                                                          --}}
                                            {{-- </div> --}}

                                            {{-- <div class="row pr-0 mr-0"> --}}

                                                {{-- @foreach($afrecuencias as $afrecuencia) --}}
                                                    {{-- <div class="col-sm align-middle border-right border-left" align="center"> --}}
                                                        {{-- <span class="text text-primary"> --}}
                                                            {{-- {{ $afrecuencia->cantidad or ''}} --}}
                                                        {{-- </span> --}}
                                                    {{-- </div> --}}
                                                {{-- @endforeach --}}

                                                {{-- {{$afrecuencia->findByFrecuencia($afrecuencia->mactividad_id)}}                                                                                                                                          --}}

                                            {{-- </div> --}}

                                        @endif
                                    </div>

                                    <div class="badge badge-light badge-pill">
                                        @component('elements.buttons.edit')
                                            @slot('title','Mostrar')
                                            @slot('btnclass','link')
                                            @slot('route',route('mactividads.show',$mactividad->id))
                                            @slot('icon','nuevo')
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>

                </ul>

                <span class="badge badge-light badge-pill">
                    @component('elements.buttons.edit')
                        @slot('title','Mostrar')
                        @slot('btnclass','link')
                        @slot('route',route('mactividads.show',$mactividad->id))
                        @slot('icon','mostrar')
                    @endcomponent
                </span>

            </li>

        @endforeach

    </ul>

@endif