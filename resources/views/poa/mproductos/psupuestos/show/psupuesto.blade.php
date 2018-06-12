@isset($psupuesto)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Producto</th>

            <th scope="col">

                <span class="text-mproductos-poa-{{ $psupuesto->mproducto->id  or ''}}">
                    {{$psupuesto->mproducto->producto or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Supuesto</th>

            <td scope="col">

                <span class="text-mproductos-descripcion-{{ $psupuesto->id  or ''}}">
                    {{$psupuesto->supuesto or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($psupuesto->created_at))
                    {{$psupuesto->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($psupuesto->updated_at))
                    {{$psupuesto->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('psupuestos.edit',$psupuesto->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['psupuestos'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset