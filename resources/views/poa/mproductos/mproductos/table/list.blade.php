@php ($class_N="")
@php ($class_objetivo="")
@php ($class_descripcion="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-mproducto">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_objetivo }}">Objetivo</th>
            <th scope="col" class="{{ $class_descripcion }}">Descripción</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($mproductos as $mproducto)
        
        <tr data-mproducto="{{$mproducto->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-mproducto-descripcion-{{ $mproducto->id }}" class="{{ $class_objetivo }}" title="POA: {{ $mproducto->mobjetivo->objetivo or ''}}">
                <span class="text-objetivo-objetivo-{{ $mproducto->mobjetivo->id }}">
                    {{$mproducto->mobjetivo->truncobjetivo or ''}}
                </span>
            </td>

            <td id="td-mproducto-mproducto-{{ $mproducto->id }}" class="{{ $class_objetivo }}" title="Producto: {{ $mproducto->producto or ''}}">
                <span class="text-mproducto-direccion-{{ $mproducto->id }}">
                    {{$mproducto->truncproducto or ''}}
                </span>
            </td>

            <td id="td-mproducto-created_at-{{ $mproducto->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-mproducto-created_at-{{$mproducto->id}}">
                    {{ (isset($mproducto->created_at)) ? Carbon\Carbon::parse($mproducto->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproductos-updated_at-{{ $mproducto->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-mproducto-updated_at-{{$mproducto->id}}">
                    {{ (isset($mproducto->updated_at)) ? Carbon\Carbon::parse($mproducto->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $mproducto->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('mproductos.showfull', $mproducto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('mproductos.show', $mproducto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $mproducto->id }}" href="{{ route('mproductos.edit',$mproducto->id) }}" id="btn-editinstitucion_{{$mproducto->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('mproductos.destroy',$mproducto->id) }}" id="btn-delete-institucionid_{{$mproducto->id}}">
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
            $('#table-data-mproducto').DataTable( {
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