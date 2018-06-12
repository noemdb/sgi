@isset($mactividad)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Producto</th>

            <th scope="col">

                <span class="text-mactividads-producto-{{ $mactividad->mproducto->id  or ''}}">
                    {{$mactividad->mproducto->producto or ''}}
                </span>
                {{-- INI mas información - Tablas relacionadas --}}

                <br>
                <a data-toggle="collapse" href="#collapseProducto" role="button" aria-expanded="false" aria-controls="collapseProducto" title="Más Información">Más</a>

                <div class="collapse" id="collapseProducto">
                    <div class="card card-body">

                        @include('admin.poa.mproductos.mproductos.show.producto',['mproducto'=>$mactividad->mproducto])

                        <div>
                            <a class="btn btn-light float-right" href="{{ route('mproductos.show', $mactividad->mproducto->id) }}" role="button" >Más</a>
                        </div>

                    </div>
                </div>
                {{-- FIN mas información - Tablas relacionadas --}}

            </th>
        </tr>
        <tr>
            <th scope="col">Responsable</th>

            <td scope="col">

                <span class="text-mactividads-responsable-{{ $mactividad->id  or ''}}">
                    {{$mactividad->responsable->nombre or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Frecuencia</th>

            <td scope="col">

                <span class="text-mactividads-nomfrecuencia-{{ $mactividad->id  or ''}}">
                    {{$mactividad->nomfrecuencia or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Reprogramada</th>

            <td scope="col">

                <span class="text-mactividads-ractividada-{{ $mactividad->id  or ''}}">
                    {{ ( isset($mactividad->ractividada_id) ) ? 'SI':''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">
                <span class="text-mactividads-descripcion-{{ $mactividad->descripcion  or ''}}">
                    {{$mactividad->descripcion or ''}}
                </span>
            </th>
        </tr>
        <tr>
            <th scope="col">ubicaión</th>
            <th scope="col">
                <span class="text-mactividads-ubicaion-{{ $mactividad->ubicaion  or ''}}">
                    {{$mactividad->ubicaion or ''}}
                </span>
            </th>
        </tr>
        {{-- <tr> --}}
            {{-- <th scope="row">Fecha Inicial</th> --}}
            {{-- <td> --}}
                {{-- {{ (isset($mactividad->finicial)) ? Carbon\Carbon::parse($mactividad->finicial)->format('d-m-Y') : '' }} --}}
            {{-- </td> --}}
        {{-- </tr> --}}
        {{-- <tr> --}}
            {{-- <th scope="row">Fecha Final</th> --}}
            {{-- <td> --}}
                {{-- {{ (isset($mactividad->ffinal)) ? Carbon\Carbon::parse($mactividad->ffinal)->format('d-m-Y') : '' }} --}}
            {{-- </td> --}}
        {{-- </tr> --}}
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($mactividad->created_at))
                    {{$mactividad->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($mactividad->updated_at))
                    {{$mactividad->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('mactividads.edit',$mactividad->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['mactividads'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset