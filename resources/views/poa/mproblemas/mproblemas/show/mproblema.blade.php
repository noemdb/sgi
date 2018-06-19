@isset($mproblema)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">POA</th>

            <th scope="col">

                <span class="text-mproblemas-poa-{{ $mproblema->poa->id  or ''}}">
                    {{$mproblema->poa->descripcion or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Dirección</th>

            <td scope="col">

                <span class="text-mproblemas-direccion-{{ $mproblema->direccion->id  or ''}}">
                    {{$mproblema->direccion->nombre or ''}}<br>
                    {{$mproblema->direccion->descripcion or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Problema</th>

            <td scope="col">

                <span class="text-mproblemas-problema-{{ $mproblema->id  or ''}}">
                    {{$mproblema->problema}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($mproblema->created_at))
                    {{$mproblema->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($mproblema->updated_at))
                    {{$mproblema->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('mproblemas.edit',$mproblema->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['mproblemas'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
      </tbody>
    </table>
@endisset