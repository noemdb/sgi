@php ($class_N="")
@php ($class_problema="")
@php ($class_objetivo="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-mobjetivo">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_problema }}">Problema</th>
            <th scope="col" class="{{ $class_objetivo }}">Objetivo</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($mobjetivos as $mobjetivo)
        
        <tr data-mobjetivo="{{$mobjetivo->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-mobjetivo-descripcion-{{ $mobjetivo->id }}" class="{{ $class_problema }}" title="POA: {{ $mobjetivo->Mproblema->problema or ''}}">
                <span class="text-Mproblema-problema-{{ $mobjetivo->Mproblema->id }}">
                    {{$mobjetivo->Mproblema->truncproblema or ''}}
                </span>
            </td>

            <td id="td-mobjetivo-objetivo-{{ $mobjetivo->id }}" class="{{ $class_objetivo }}" title="objetivo: {{ $mobjetivo->objetivo or ''}}">
                <span class="text-mobjetivo-direccion-{{ $mobjetivo->id }}">
                    {{$mobjetivo->truncobjetivo or ''}}
                </span>
            </td>

            <td id="td-mobjetivo-created_at-{{ $mobjetivo->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-mobjetivo-created_at-{{$mobjetivo->id}}">
                    {{ (isset($mobjetivo->created_at)) ? Carbon\Carbon::parse($mobjetivo->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mobjetivos-updated_at-{{ $mobjetivo->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-mobjetivo-updated_at-{{$mobjetivo->id}}">
                    {{ (isset($mobjetivo->updated_at)) ? Carbon\Carbon::parse($mobjetivo->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $mobjetivo->id }}">
                <div class="btn-group btn-group-sm">

                    {{-- <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('mobjetivos.showfull', $mobjetivo->id) }}">
                        <i class="fas fa-info"></i>
                    </a> --}}

                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('mobjetivos.show', $mobjetivo->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $mobjetivo->id }}" href="{{ route('mobjetivos.edit',$mobjetivo->id) }}" id="btn-editinstitucion_{{$mobjetivo->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('mobjetivos.destroy',$mobjetivo->id) }}" id="btn-delete-institucionid_{{$mobjetivo->id}}">
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
            $('#table-data-mobjetivo').DataTable( {
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