@isset($mproblema)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th rowspan="6" class="align-middle">{{ $loop->iteration }}</th>
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
                    {{-- [{{$mproblema->id}}] --}}
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
      </tbody>
    </table>
@endisset