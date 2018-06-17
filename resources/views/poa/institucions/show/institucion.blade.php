@isset($institucion)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Nombre</th>

            <th scope="col">

                <span class="text-institucions-nombre-{{ $institucion->id  or ''}}">
                    {{$institucion->nombre or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Código</th>

            <td scope="col">

                <span class="text-institucions-code-{{ $institucion->id  or ''}}">
                    {{$institucion->fullcode or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Descripción</th>
            <td>

                <span class="text-institucions-descripcion-{{ $institucion->id  or ''}}">
                    {{$institucion->descripcion or ''}}
                </span>

            </td>
        </tr>

        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($institucion->created_at))
                    {{$institucion->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($institucion->updated_at))
                    {{$institucion->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {{-- INI Menu modelos realcionados --}}
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">

                  <a class="btn btn-dark w-100" href="{{ route('institucions.edit',$institucion->id) }}" role="button">
                    Actualzar
                    <i class="fas fa-building"></i>
                  </a>

                </div>
                {{-- FIN Menu modelos realcionados --}}
            </td>
        </tr>
      </tbody>
    </table>
@endisset