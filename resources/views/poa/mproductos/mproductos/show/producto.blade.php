@isset($mproducto)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Objetivo</th>

            <th scope="col">

                <span class="text-mproductos-poa-{{ $mproducto->mobjetivo->id  or ''}}">
                    {{$mproducto->mobjetivo->objetivo or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Producto</th>

            <td scope="col">

                <span class="text-mproductos-descripcion-{{ $mproducto->id  or ''}}">
                    {{$mproducto->producto or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($mproducto->created_at))
                    {{$mproducto->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($mproducto->updated_at))
                    {{$mproducto->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>

      </tbody>

    </table>
    
@endisset