@isset($mlogico)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Tipo</th>

            <td scope="col">

                <span class="text-mlogicos-tipo-{{ $mlogico->id  or ''}}">
                    {{$mlogico->tipo or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Resumen</th>
            <td>

                <span class="text-mlogicos-resumen-{{ $mlogico->id  or ''}}">
                    {{$mlogico->resumen or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Indicadores</th>
            <td>

                <span class="text-mlogicos-indicadores-{{ $mlogico->id  or ''}}">
                    {{$mlogico->indicadores or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Medios de Verificación</th>
            <td>

                <span class="text-mlogicos-mverificacion-{{ $mlogico->id  or ''}}">
                    {{$mlogico->mverificacion or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Supuestos</th>
            <td>

                <span class="text-mlogicos-mverificacion-{{ $mlogico->id  or ''}}">
                    {{$mlogico->supuestos or ''}}
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($mlogico->created_at))
                    {{$mlogico->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($mlogico->updated_at))
                    {{$mlogico->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-info w-100" href="{{ route('mlogicos.show',$mlogico->id) }}" role="button">
                    Mostrar
                    <i class="{{ $icon_menus['mlogicos'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset