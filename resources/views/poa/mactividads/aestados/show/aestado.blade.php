@isset($aestado)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Actividad</th>

            <th scope="col">

                <span class="text-aestado-mactividads-poa-{{ $aestado->mactividad->id  or ''}}">
                    {{$aestado->mactividad->descripcion or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Estado</th>

            <td scope="col">

                <span class="text-aestado-mactividad-descripcion-{{ $aestado->id  or ''}}">
                    {{$aestado->estado or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Usuario</th>

            <td scope="col">

                <span class="text-aestado-user-username-{{ $aestado->user->id  or ''}}">
                    {{$aestado->user->username or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($aestado->created_at))
                    {{$aestado->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($aestado->updated_at))
                    {{$aestado->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
      </tbody>
    </table>
@endisset