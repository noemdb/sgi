@isset($presupuestaria)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Objetivo</th>

            <th scope="col">

                <span class="text-presupuestarias-poa-{{ $presupuestaria->mobjetivo->id  or ''}}">
                    {{$presupuestaria->mobjetivo->objetivo or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Descripción</th>

            <td scope="col">

                <span class="text-presupuestarias-descripcion-{{ $presupuestaria->id  or ''}}">
                    {{$presupuestaria->descripcion or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Programa</th>

            <td scope="col">

                <span class="text-presupuestarias-programa-{{ $presupuestaria->id  or ''}}">
                    {{$presupuestaria->programa or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="col">Asignación</th>

            <td scope="col">

                <span class="text-presupuestarias-asignacion-{{ $presupuestaria->id  or ''}}">
                    {{$presupuestaria->asignacion or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($presupuestaria->created_at))
                    {{$presupuestaria->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($presupuestaria->updated_at))
                    {{$presupuestaria->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('presupuestarias.edit',$presupuestaria->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['mobjetivos'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset