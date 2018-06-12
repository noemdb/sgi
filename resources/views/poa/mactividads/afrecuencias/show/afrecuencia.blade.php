@isset($afrecuencia)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Actividad</th>
            <th scope="col">
                <span class="text-afrecuencia-mactividad-{{ $afrecuencia->mactividad->id  or ''}}">
                    {{$afrecuencia->mactividad->descripcion or ''}}
                </span>
            </th>
        </tr>
        <tr>
            <th scope="col">Lapso</th>
            <td scope="col">
                <span class="text-afrecuencia-cantidad-{{ $afrecuencia->id  or ''}}">
                    {{$afrecuencia->nomlapso or ''}}
                    {{$afrecuencia->mactividad->unifrecuencia or ''}}
                </span>
            </td>
        </tr>
        <tr>
            <th scope="col">Cantidad</th>
            <td scope="col">
                <span class="text-afrecuencia-cantidad-{{ $afrecuencia->id  or ''}}">
                    {{$afrecuencia->cantidad or ''}}
                </span>
            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($afrecuencia->created_at))
                    {{$afrecuencia->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($afrecuencia->updated_at))
                    {{$afrecuencia->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('afrecuencias.edit',$afrecuencia->id) }}" role="button">
                    Actualizar
                    <i class="{{ $icon_menus['btn_frecuencias'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset