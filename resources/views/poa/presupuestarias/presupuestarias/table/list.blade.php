@php ($class_N="")
@php ($class_objetivo="")
@php ($class_descripcion="")
@php ($class_programa="")
@php ($class_asignacion="")
{{-- @php ($class_created_at="d-none d-xl-table-cell") --}}
{{-- @php ($class_updated_at="d-none d-xl-table-cell") --}}
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-presupuestaria">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_objetivo }}">Objetivo</th>
            <th scope="col" class="{{ $class_descripcion }}">Descripción</th>
            <th scope="col" class="{{ $class_programa }}">Programa</th>
            <th scope="col" class="{{ $class_asignacion }}">Asignación</th>
            {{-- <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th> --}}
            {{-- <th scope="col" class="{{ $class_updated_at }}">Actualizado</th> --}}
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($presupuestarias as $presupuestaria)
        
        <tr data-presupuestaria="{{$presupuestaria->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-presupuestaria-descripcion-{{ $presupuestaria->id }}" class="{{ $class_objetivo }}" title="POA: {{ $presupuestaria->mobjetivo->objetivo or ''}}">
                <span class="text-objetivo-objetivo-{{ $presupuestaria->mobjetivo->id }}">
                    {{$presupuestaria->mobjetivo->truncobjetivo or ''}}
                </span>
            </td>

            <td id="td-presupuestaria-descripcion-{{ $presupuestaria->id }}" class="{{ $class_objetivo }}" title="Descripción: {{ $presupuestaria->descripcion or ''}}">
                <span class="text-presupuestaria-descripcion-{{ $presupuestaria->id }}">
                    {{$presupuestaria->truncdescripcion or ''}}
                </span>
            </td>

            <td id="td-presupuestaria-programa-{{ $presupuestaria->id }}" class="{{ $class_objetivo }}" title="Programa: {{ $presupuestaria->programa or ''}}">
                <span class="text-presupuestaria-programa-{{ $presupuestaria->id }}">
                    {{$presupuestaria->programa or ''}}
                </span>
            </td>

            <td id="td-presupuestaria-asignacion-{{ $presupuestaria->id }}" class="{{ $class_objetivo }}" title="Asignación: {{ $presupuestaria->asignacion or ''}}">
                <span class="text-presupuestaria-asignacion-{{ $presupuestaria->id }}">
                    {{$presupuestaria->asignacion or ''}}
                </span>
            </td>

            {{-- <td id="td-presupuestaria-created_at-{{ $presupuestaria->id or ''}}" class="{{ $class_created_at }}"> --}}
                {{-- <span class="text-presupuestaria-created_at-{{$presupuestaria->id}}"> --}}
                    {{-- {{ (isset($presupuestaria->created_at)) ? Carbon\Carbon::parse($presupuestaria->created_at)->format('d-m-Y') : '' }} --}}
                {{-- </span> --}}
            {{-- </td> --}}

            {{-- <td id="td-presupuestarias-updated_at-{{ $presupuestaria->id or ''}}" class="{{ $class_updated_at }}"> --}}
                {{-- <span class="text-presupuestaria-updated_at-{{$presupuestaria->id}}"> --}}
                    {{-- {{ (isset($presupuestaria->updated_at)) ? Carbon\Carbon::parse($presupuestaria->updated_at)->format('d-m-Y') : '' }} --}}
                {{-- </span> --}}
            {{-- </td> --}}

            <td class="{{ $class_action }}" id="btn-action-{{ $presupuestaria->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('presupuestarias.showfull', $presupuestaria->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('presupuestarias.show', $presupuestaria->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $presupuestaria->id }}" href="{{ route('presupuestarias.edit',$presupuestaria->id) }}" id="btn-editinstitucion_{{$presupuestaria->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('presupuestarias.destroy',$presupuestaria->id) }}" id="btn-delete-institucionid_{{$presupuestaria->id}}">
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
            $('#table-data-presupuestaria').DataTable( {
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