@isset($pcausaefecto)

    <table class="table table-striped table-bordered table-sm {{-- table-sm table-hover --}}">
      <tbody>
        <tr>

            <th rowspan="6" class="align-middle">{{ $loop->iteration or '' }}</th>
            {{-- <th rowspan="6" class="align-middle">[{{ $pcausaefecto->id or '' }}]</th> --}}

            <td scope="col" colspan="2">
                <span class="text-pcausaefectos-pcausaefecto-{{ $pcausaefecto->id  or ''}}">
                    {{$pcausaefecto->causaefecto or ''}}<br>
                </span>
                @component('elements.buttons.edit')
                    @slot('title','Mostrar')
                    @slot('btnclass','link')
                    @slot('route',route('pdeterminantes.show',$pcausaefecto->id))
                    @slot('icon','mostrar')
                @endcomponent
            </td>

        </tr>

      </tbody>
    </table>
@endisset