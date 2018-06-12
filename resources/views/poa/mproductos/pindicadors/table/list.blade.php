@php ($class_N="")
@php ($class_mproducto="")
@php ($class_verificador="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-pindicador">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_mproducto }}">Producto</th>
            <th scope="col" class="{{ $class_verificador }}">Indicador</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($pindicadors as $pindicador)
        
        <tr data-pindicador="{{$pindicador->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-pindicador-verificador-{{ $pindicador->id }}" class="{{ $class_mproducto }}" title="POA: {{ $pindicador->mproducto->producto or ''}}">
                <span class="text-mproducto-producto-{{ $pindicador->mproducto->id }}">
                    {{$pindicador->mproducto->truncproducto or ''}}
                </span>
            </td>

            <td id="td-pindicador-pindicador-{{ $pindicador->id }}" class="{{ $class_mproducto }}" title="verificador: {{ $pindicador->verificador or ''}}">
                <span class="text-pindicador-indicador-{{ $pindicador->id }}">
                    {{$pindicador->truncindicador or ''}}
                </span>
            </td>

            <td id="td-pindicador-created_at-{{ $pindicador->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-pindicador-created_at-{{$pindicador->id}}">
                    {{ (isset($pindicador->created_at)) ? Carbon\Carbon::parse($pindicador->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproductos-updated_at-{{ $pindicador->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-pindicador-updated_at-{{$pindicador->id}}">
                    {{ (isset($pindicador->updated_at)) ? Carbon\Carbon::parse($pindicador->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $pindicador->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('pindicadors.showfull', $pindicador->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('pindicadors.show', $pindicador->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $pindicador->id }}" href="{{ route('pindicadors.edit',$pindicador->id) }}" id="btn-editinstitucion_{{$pindicador->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('pindicadors.destroy',$pindicador->id) }}" id="btn-delete-institucionid_{{$pindicador->id}}">
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
            $('#table-data-pindicador').DataTable( {
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