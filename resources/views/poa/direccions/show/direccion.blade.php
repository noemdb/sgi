@isset($direccion)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Nombre</th>

            <th scope="col">

                <span class="text-direccions-nombre-{{ $direccion->id  or ''}}">
                    {{$direccion->nombre or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Descripción</th>

            <td scope="col">

                <span class="text-direccions-descripcion-{{ $direccion->id  or ''}}">
                    {{$direccion->descripcion or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($direccion->created_at))
                    {{$direccion->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($direccion->updated_at))
                    {{$direccion->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{-- INI Menu modelos realcionados --}}
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

                  <a class="btn btn-dark w-100" href="{{ route('direccions.edit',$direccion->id) }}" role="button">
                    Actualzar
                    <i class="fas fa-warehouse"></i>
                  </a>

                </div>
                {{-- FIN Menu modelos realcionados --}}
            </td>
        </tr>
      </tbody>
    </table>
@endisset