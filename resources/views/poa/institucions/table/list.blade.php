@php ($class_N="")
@php ($class_nombre="")
@php ($class_code="")
@php ($class_descripcion="d-none d-md-table-cell")
@php ($class_created_at="d-none d-lg-table-cell")
@php ($class_updated_at="d-none d-lg-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-institucion">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_nombre }}">Nombre</th>
            <th scope="col" class="{{ $class_code }}">Codigo</th>
            <th scope="col" class="{{ $class_descripcion }}">Descripción</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($institucions as $institucion)
        
        <tr data-institucion="{{$institucion->id}}">
            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>
            <td id="td-institucion-nombre-{{ $institucion->id }}" class="{{ $class_nombre }}" title="Descripción: {{ $institucion->descripcion or ''}}">
                <span class="text-institucions-nombre-{{ $institucion->id }}">
                    {{$institucion->nombre}}
                </span>
            </td>
            <td id="td-institucion-code-{{ $institucion->id }}" class="{{ $class_code }}" title="{{ $institucion->descripcion or ''}}">
                <span class="text-institucions-code-{{ $institucion->id }}">
                    {{$institucion->full_code}}
                </span>
            </td>
            <td id="td-institucion-descripcion-{{ $institucion->id }}" class="{{ $class_descripcion }}" title="Descripción: {{ $institucion->descripcion or ''}}">
                <span class="text-institucion-descripcion-{{ $institucion->id or ''}}">
                    {{-- {{ $institucion->descripcion or ''}} --}}
                    {{ $institucion->truncdescripcion or ''}}
                </span>
            </td>

            <td id="td-institucion-created_at-{{ $institucion->id or ''}}" class="{{ $class_created_at }}">
                    <span class="text-institucion-created_at-{{$institucion->id}}">
                        {{ (isset($institucion->created_at)) ? Carbon\Carbon::parse($institucion->created_at)->format('d-m-Y') : '' }}
                    </span>
                </td>

            <td id="td-institucions-updated_at-{{ $institucion->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-institucions-updated_at-{{$institucion->id}}">
                    {{ (isset($institucion->updated_at)) ? Carbon\Carbon::parse($institucion->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $institucion->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('institucions.show',$institucion->id) }}">
                        <i class="fas fa-info"></i>
                    </a>

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $institucion->id }}" href="{{ route('institucions.edit',$institucion->id) }}" id="btn-editinstitucion_{{$institucion->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('institucions.destroy',$institucion->id) }}" id="btn-delete-institucionid_{{$institucion->id}}">
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
            $('#table-data-institucion').DataTable( {
                "pageLength": 10,
                "responsive": false,
                "searching": false,
                "paging": false,
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