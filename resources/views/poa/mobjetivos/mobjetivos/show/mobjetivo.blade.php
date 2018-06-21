@isset($mobjetivo)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Problema</th>

            <th scope="col">

                <span class="text-mobjetivos-poa-{{ $mobjetivo->problema->id  or ''}}">
                    {{$mobjetivo->Mproblema->problema or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Objetivo</th>

            <td scope="col">

                <span class="text-mobjetivos-mobjetivo-{{ $mobjetivo->id  or ''}}">
                    {{$mobjetivo->objetivo or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($mobjetivo->created_at))
                    {{$mobjetivo->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($mobjetivo->updated_at))
                    {{$mobjetivo->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-active w-100" href="{{ route('mobjetivos.edit',$mobjetivo->id) }}" role="button">
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