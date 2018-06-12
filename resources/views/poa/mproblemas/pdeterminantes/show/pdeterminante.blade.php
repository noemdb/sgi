@isset($pdeterminante)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Problema</th>

            <th scope="col">

                <span class="text-pdeterminantes-poa-{{ $pdeterminante->problema->id  or ''}}">
                    {{$pdeterminante->mproblema->problema or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Determinante</th>

            <td scope="col">

                <span class="text-pdeterminantes-determinante-{{ $pdeterminante->id  or ''}}">
                    {{$pdeterminante->determinante or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($pdeterminante->created_at))
                    {{$pdeterminante->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($pdeterminante->updated_at))
                    {{$pdeterminante->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
      </tbody>
    </table>
@endisset