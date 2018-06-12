@isset($Mproblema)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">POA</th>

            <th scope="col">

                <span class="text-mproblemas-poa-{{ $Mproblema->poa->id  or ''}}">
                    {{$Mproblema->poa->descripcion or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Dirección</th>

            <td scope="col">

                <span class="text-mproblemas-direccion-{{ $Mproblema->direccion->id  or ''}}">
                    {{$Mproblema->direccion->nombre or ''}}<br>
                    {{$Mproblema->direccion->descripcion or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Problema</th>

            <td scope="col">

                <span class="text-mproblemas-problema-{{ $Mproblema->id  or ''}}">
                    {{$Mproblema->problema}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($Mproblema->created_at))
                    {{$Mproblema->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($Mproblema->updated_at))
                    {{$Mproblema->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
      </tbody>
    </table>
@endisset