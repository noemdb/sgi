@php ($class_N="")
@php ($class_poa="")
@php ($class_direccion="")
@php ($class_problema="d-none d-md-table-cell")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-Mproblema">
    
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_poa }}">POA</th>
            <th scope="col" class="{{ $class_direccion }}">Dirección</th>
            <th scope="col" class="{{ $class_problema }}">Problema</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($mproblemas as $Mproblema)
        
        <tr data-Mproblema="{{$Mproblema->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-Mproblema-descripcion-{{ $Mproblema->id }}" class="{{ $class_poa }}" title="POA: {{ $Mproblema->poa->descripcion or ''}}">
                <span class="text-mproblemas-descripcion-{{ $Mproblema->id }}">
                    {{$Mproblema->poa->truncdescripcion or ''}}
                </span>
            </td>

            <td id="td-Mproblema-direccion-{{ $Mproblema->id }}" class="{{ $class_direccion }}" title="Dirección: {{ $Mproblema->direccion->descripcion or ''}}">
                <span class="text-mproblemas-direccion-{{ $Mproblema->id }}">
                    {{$Mproblema->direccion->truncdescripcion or ''}}
                </span>
            </td>

            <td id="td-Mproblema-problema-{{ $Mproblema->id }}" class="{{ $class_problema }}" title="{{ $Mproblema->problema or ''}}">
                <span class="text-mproblemas-problema-{{ $Mproblema->id }}">
                    {{$Mproblema->truncproblema}}
                </span>
            </td>

            <td id="td-Mproblema-created_at-{{ $Mproblema->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-Mproblema-created_at-{{$Mproblema->id}}">
                    {{ (isset($Mproblema->created_at)) ? Carbon\Carbon::parse($Mproblema->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproblemas-updated_at-{{ $Mproblema->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-mproblemas-updated_at-{{$Mproblema->id}}">
                    {{ (isset($Mproblema->updated_at)) ? Carbon\Carbon::parse($Mproblema->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $Mproblema->id }}">
                <div class="btn-group btn-group-sm">

                    {{-- <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('mproblemas.showfull', $Mproblema->id) }}">
                        <i class="fas fa-info"></i>
                    </a> --}}

                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('mproblemas.show', $Mproblema->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $Mproblema->id }}" href="{{ route('mproblemas.edit',$Mproblema->id) }}" id="btn-editinstitucion_{{$Mproblema->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('mproblemas.destroy',$Mproblema->id) }}" id="btn-delete-institucionid_{{$Mproblema->id}}">
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
            $('#table-data-Mproblema').DataTable( {
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