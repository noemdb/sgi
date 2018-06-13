@isset($mproducto)

    <table class="table table-striped table-bordered table-sm {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            {{-- <th rowspan="6" class="align-middle">{{ $count or '' }}</th> --}}
            <th rowspan="6" class="align-middle">{{ $loop->iteration or '' }}</th>

            <td scope="col" colspan="2">

                <span class="text-mobjetivos-mobjetivo-{{ $mobjetivo->id  or ''}}">
                    [{{$mproducto->id}}]
                    {{$mproducto->producto or ''}}<br>
                    
                    <br>
                </span>
                @component('poa.elementos.botones.edit')
                    @slot('title','Mostrar')
                    @slot('btnclass','link')
                    @slot('route',route('mproductos.show',$mproducto->id))
                    @slot('icon','mostrar')
                @endcomponent

            </td>
        </tr>
        
        <tr>
            <td>
                
            </td>
        </tr>
        
      </tbody>
    </table>
    
@endisset