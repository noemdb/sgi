@isset($responsable)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Dirección</th>

            <th scope="col">

                <span class="text-direccion-nombre-{{ $responsable->direccion->id  or ''}}">
                    {{$responsable->direccion->nombre or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Nombre</th>

            <td scope="col">

                <span class="text-responsables-nombre-{{ $responsable->id  or ''}}">
                    {{$responsable->nombre or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($responsable->created_at))
                    {{$responsable->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($responsable->updated_at))
                    {{$responsable->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{-- INI Menu modelos realcionados --}}
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

                  <a class="btn btn-warning w-100" href="{{ route('responsables.edit',$responsable->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['responsables'] }}"></i>
                  </a>

                </div>
                {{-- FIN Menu modelos realcionados --}}
            </td>
        </tr>
      </tbody>
    </table>
@endisset