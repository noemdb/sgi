@isset($pverificador)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Producto</th>

            <th scope="col">

                <span class="text-mproductos-poa-{{ $pverificador->mproducto->id  or ''}}">
                    {{$pverificador->mproducto->producto or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Verificador</th>

            <td scope="col">

                <span class="text-mproductos-descripcion-{{ $pverificador->id  or ''}}">
                    {{$pverificador->verificador or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($pverificador->created_at))
                    {{$pverificador->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($pverificador->updated_at))
                    {{$pverificador->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('pverificadors.edit',$pverificador->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['pverificadors'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset