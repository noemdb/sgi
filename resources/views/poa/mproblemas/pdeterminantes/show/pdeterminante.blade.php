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

        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-warning w-100" href="{{ route('pdeterminantes.edit',$pdeterminante->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['pdeterminantes'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset