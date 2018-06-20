@isset($pindicador)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Producto</th>

            <th scope="col">

                <span class="text-mproductos-poa-{{ $pindicador->mproducto->id  or ''}}">
                    {{$pindicador->mproducto->producto or ''}}
                    <a class="link" href="{{ route('mproductos.show',$pindicador->mproducto->id) }}">Mas...</a>
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Indicador</th>

            <td scope="col">

                <span class="text-mproductos-descripcion-{{ $pindicador->id  or ''}}">
                    {{$pindicador->indicador or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($pindicador->created_at))
                    {{$pindicador->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($pindicador->updated_at))
                    {{$pindicador->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('pindicadors.edit',$pindicador->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['pindicadors'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset