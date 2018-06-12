@isset($pcausaefecto)

    <table class="table table-striped table-bordered {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            <th scope="col">Problema</th>

            <th scope="col">

                <span class="text-pcausaefectos-poa-{{ $pcausaefecto->problema->id  or ''}}">
                    {{$pcausaefecto->Mproblema->problema or ''}}
                </span>

            </th>
        </tr>
        <tr>
            <th scope="col">Causa/Efecto</th>

            <td scope="col">

                <span class="text-pcausaefectos-pcausaefecto-{{ $pcausaefecto->id  or ''}}">
                    {{$pcausaefecto->causaefecto or ''}}<br>
                </span>

            </td>
        </tr>
        <tr>
            <th scope="row">Creado</th>
            <td>
                @if(isset($pcausaefecto->created_at))
                    {{$pcausaefecto->created_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Actualizado</th>
            <td>
                @if(isset($pcausaefecto->updated_at))
                    {{$pcausaefecto->updated_at->format('d-m-Y h:m:s')}}
                @endif
            </td>
        </tr>
        {{-- INI Menu modelos realcionados --}}
        <tr>
            <td colspan="2">
                <div class="btn-group d-flex pt-2" style="width: 100%;" role="group" aria-label="Basic example">
                  <a class="btn btn-dark w-100" href="{{ route('pcausaefectos.edit',$pcausaefecto->id) }}" role="button">
                    Actualzar
                    <i class="{{ $icon_menus['pcausaefectos'] or ''}}"></i>
                  </a>
                </div>
            </td>
        </tr>
        {{-- FIN Menu modelos realcionados --}}
      </tbody>
    </table>
@endisset