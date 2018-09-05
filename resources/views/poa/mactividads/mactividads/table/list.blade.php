@php
    $class = [
        'count'=>'',
        'mproducto'=>'',
        'responsable'=>'d-none d-xl-table-cell',
        'ractividada'=>'d-none d-lg-table-cell',
        'descripcion'=>'',
        'frecuencia'=>'d-none d-lg-table-cell',
        'ubicaion'=>'',
        'finicial'=>'d-none d-xl-table-cell',
        'ffinal'=>'d-none d-xl-table-cell',
        'ffinal'=>'',
        'created_at'=>'d-none d-xl-table-cell',
        'updated_at'=>'d-none d-xl-table-cell',
        'accion'=>'',
    ]
@endphp

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-mactividad">
    <thead>
        <tr>
            <th scope="col" class="{{ $class['count'] }}">N</th>
            <th scope="col" class="{{ $class['mproducto'] }}">Producto</th>
            <th scope="col" class="{{ $class['descripcion'] }}">Descripción</th>
            <th scope="col" class="{{ $class['responsable'] }}">Responsable</th>
            <th scope="col" class="{{ $class['ractividada'] }}">Reprogramada</th>
            {{-- <th scope="col" class="{{ $class['frecuencia'] }}">Frecuencia</th>             --}}
            {{-- <th scope="col" class="{{ $class['ubicaion'] }}">Ubicaión</th> --}}
            <th scope="col" class="{{ $class['finicial'] }}">F.Inicial</th>
            <th scope="col" class="{{ $class['ffinal'] }}">F.Final</th>
            {{--
            <th scope="col" class="{{ $class['created_at'] }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class['updated_at'] }}">Actualizado</th> 
            --}}
            <th scope="col" class="{{ $class['accion'] }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($mactividads as $mactividad)
        
        <tr data-mactividad="{{$mactividad->id}}">

            <td scope="row" id="td-count" class="{{ $class['count'] }}">
                {{$n++}}
            </td>

            <td class="{{ $class['mproducto']}}" title="{{ $mactividad->mproducto->producto or ''}}">
                {{$mactividad->mproducto->truncproducto or ''}}
            </td>

            <td class="{{ $class['descripcion'] }}" title="{{ $mactividad->descripcion or ''}}">
                {{$mactividad->truncdescripcion or ''}}
            </td>

            <td class="{{ $class['responsable'] }}" title="{{ $mactividad->responsable->nombre or ''}}">
                {{$mactividad->responsable->nombre or ''}}
            </td>

            <td class="{{ $class['ractividada'] }}" title="{{ $mactividad->ractividada_id or ''}}">
                {{(isset($mactividad->ractividada_id)) ? 'Reprograma':''}}
            </td>

            {{-- <td class="{{ $class['frecuencia'] }}" title="{{ $mactividad->frecuencia or ''}}">
                {{$mactividad->NomFrecuencia or ''}}
            </td>    --}}
            
            {{-- <td class="{{ $class['ubicaion'] }}" title="{{ $mactividad->ubicaion or ''}}">
                {{$mactividad->ubicaion or ''}}
            </td> --}}

             
            <td class="{{ $class['finicial'] }}">
                {{ (isset($mactividad->finicial)) ? Carbon\Carbon::parse($mactividad->finicial)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['ffinal'] }}">
                {{ (isset($mactividad->ffinal)) ? Carbon\Carbon::parse($mactividad->ffinal)->format('d-m-Y') : '' }}
            </td>            

            {{-- 
            <td class="{{ $class['created_at'] }}">
                {{ (isset($mactividad->created_at)) ? Carbon\Carbon::parse($mactividad->created_at)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['updated_at'] }}">
                {{ (isset($mactividad->updated_at)) ? Carbon\Carbon::parse($mactividad->updated_at)->format('d-m-Y') : '' }}
            </td> 
            --}}

            <td class="{{ $class['accion'] }}" id="btn-action-{{ $mactividad->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('mactividads.showfull', $mactividad->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('mactividads.show', $mactividad->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $mactividad->id }}" href="{{ route('mactividads.edit',$mactividad->id) }}" id="btn-editinstitucion_{{$mactividad->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('mactividads.destroy',$mactividad->id) }}" id="btn-delete-institucionid_{{$mactividad->id}}">
                        <i class="fas fa-trash"></i>
                    </a>
                    
                </div>
            </td>

            
        </tr>
        @endforeach
    </tbody>
</table>

@section('stylesheet')
    @parent

    <link rel="stylesheet" href="{{ asset('vendor/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.css') }}">

@endsection

@section('scripts')
    @parent

    <script src="{{ asset("vendor/datatables/DataTables-1.10.16/js/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("vendor/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.js") }}"></script>

   <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#table-data-mactividad').DataTable( {
                "pageLength": 10,
                "responsive": false,
                // "searching": false,
                // "paging": false,
                "columnDefs": [ {
                    "targets": 'nosort',
                    "orderable": false
                } ],
                "language": {
                    "url": "{{ asset("vendor/datatables/lang/spanish.json") }}"
                },
                // "dom": '<"top"ifl>rt<"bottom"p><"clear">',
            } );
        } );

   </script>

@endsection