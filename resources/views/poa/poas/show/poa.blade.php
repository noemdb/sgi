@isset($poa)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Descripción</th>

            <th scope="col">

                <span class="text-poas-descripcion-{{ $poa->id  or ''}}">
                    {{$poa->descripcion or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Período</th>

            <td scope="col">

                <span class="text-poas-periodo-{{ $poa->id  or ''}}">
                    {{$poa->periodo or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Área</th>

            <td scope="col">

                <span class="text-poas-area-{{ $poa->id  or ''}}">
                    {{$poa->area or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Estratégia</th>
            <td>

                <span class="text-poas-estrategia-{{ $poa->id  or ''}}">
                    {{$poa->estrategia or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Usuario</th>
            <td>

                <span class="text-poas-username-{{ $poa->id  or ''}}">
                    {{$user->username or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($poa->created_at))
                    {{$poa->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($poa->updated_at))
                    {{$poa->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('poas.edit',$poa->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['poas'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset