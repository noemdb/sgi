@isset($mobjetivo)

    <table class="table table-bordered table-sm {{-- table-sm table-hover --}}">
      <tbody>
        <tr>
            {{-- <th rowspan="6" class="align-middle">{{ $count or '' }}</th> --}}
            <th rowspan="6" class="align-middle">{{ $loop->iteration or '' }}</th>

            <td scope="col" colspan="2">

                <div class="row">

                    <div class="col-12">

                        <span class="text-mobjetivos-mobjetivo-{{ $mobjetivo->id  or ''}}">
                            {{-- [{{$mobjetivo->id}}] --}}
                            {{$mobjetivo->objetivo or ''}}
                        </span>
                        @component('admin.poa.elementos.botones.edit')
                            @slot('title','Mostrar')
                            @slot('btnclass','link')
                            @slot('route',route('mobjetivos.show',$mobjetivo->id))
                            @slot('icon','mostrar')
                        @endcomponent
                    </div>
                    
                </div>

                <div class="row">

                    <div class="col-12">

                        @isset($mobjetivo->mproductos)
                            @php($mproductos = $mobjetivo->mproductos)
                            @include('admin.poa.mproductos.mproductos.show.list')
                        @endisset
                        
                    </div>
                    
                </div>                
                
            </td>

        </tr>
        
      </tbody>
    </table>
@endisset