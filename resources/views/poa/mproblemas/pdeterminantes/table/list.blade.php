@php ($class_N="")
@php ($class_problema="")
@php ($class_determinante="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-pdeterminante">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_problema }}">Problema</th>
            <th scope="col" class="{{ $class_determinante }}">Determinante</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($pdeterminantes as $pdeterminante)
        
        <tr data-pdeterminante="{{$pdeterminante->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-pdeterminante-descripcion-{{ $pdeterminante->id }}" class="{{ $class_problema }}" title="POA: {{ $pdeterminante->Mproblema->problema or ''}}">
                <span class="text-Mproblema-problema-{{ $pdeterminante->Mproblema->id }}">
                    {{$pdeterminante->Mproblema->truncproblema or ''}}
                </span>
            </td>

            <td id="td-pdeterminante-determinante-{{ $pdeterminante->id }}" class="{{ $class_determinante }}" title="Determinante: {{ $pdeterminante->determinante or ''}}">
                <span class="text-pdeterminante-direccion-{{ $pdeterminante->id }}">
                    {{$pdeterminante->truncdeterminante or ''}}
                </span>
            </td>

            <td id="td-pdeterminante-created_at-{{ $pdeterminante->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-pdeterminante-created_at-{{$pdeterminante->id}}">
                    {{ (isset($pdeterminante->created_at)) ? Carbon\Carbon::parse($pdeterminante->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-pdeterminantes-updated_at-{{ $pdeterminante->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-pdeterminante-updated_at-{{$pdeterminante->id}}">
                    {{ (isset($pdeterminante->updated_at)) ? Carbon\Carbon::parse($pdeterminante->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $pdeterminante->id }}">
                <div class="btn-group btn-group-sm">

                    {{-- <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('pdeterminantes.showfull', $pdeterminante->id) }}">
                        <i class="fas fa-info"></i>
                    </a> --}}

                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('pdeterminantes.show', $pdeterminante->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $pdeterminante->id }}" href="{{ route('pdeterminantes.edit',$pdeterminante->id) }}" id="btn-editinstitucion_{{$pdeterminante->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('pdeterminantes.destroy',$pdeterminante->id) }}" id="btn-delete-institucionid_{{$pdeterminante->id}}">
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
            $('#table-data-pdeterminante').DataTable( {
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