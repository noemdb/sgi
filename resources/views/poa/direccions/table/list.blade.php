@php ($class_N="")
@php ($class_institucion="d-none d-xl-table-cell")
@php ($class_nombre="")
@php ($class_descripcion="")
@php ($class_created_at="d-none d-md-table-cell")
@php ($class_updated_at="d-none d-lg-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-direccion">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_nombre }}">Nombre</th>
            <th scope="col" class="{{ $class_descripcion }}">Descripción</th>
            <th scope="col" class="{{ $class_institucion }}">Institución</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($direccions as $direccion)
        
        <tr data-direccion="{{$direccion->id}}">
            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>
            <td id="td-direccion-nombre-{{ $direccion->id }}" class="{{ $class_nombre }}" title="{{ $direccion->nombre or ''}}">
                <span class="text-direccions-nombre-{{ $direccion->id }}">
                    {{$direccion->nombre}}
                </span>
            </td>
            <td id="td-direccion-descripcion-{{ $direccion->id }}" class="{{ $class_descripcion }}" title="Descripción: {{ $direccion->descripcion or ''}}">
                <span class="text-direccion-descripcion-{{ $direccion->id or ''}}">
                    {{ $direccion->truncdescripcion or ''}}
                </span>
            </td>
            <td id="td-direccion-descripcion-{{ $direccion->id }}" class="{{ $class_institucion }}" title="institucion: {{ $direccion->descripcion or ''}}">
                <span class="text-institucion-descripcion-{{ $direccion->institucion->id }}">
                    {{$direccion->institucion->truncdescripcion}}
                </span>
            </td>
            <td id="td-direccion-created_at-{{ $direccion->id or ''}}" class="{{ $class_created_at }}">
                    <span class="text-direccion-created_at-{{$direccion->id}}">
                        {{ (isset($direccion->created_at)) ? Carbon\Carbon::parse($direccion->created_at)->format('d-m-Y') : '' }}
                    </span>
                </td>

            <td id="td-direccions-updated_at-{{ $direccion->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-direccions-updated_at-{{$direccion->id}}">
                    {{ (isset($direccion->updated_at)) ? Carbon\Carbon::parse($direccion->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $direccion->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('direccions.show',$direccion->id) }}">
                        <i class="fas fa-info"></i>
                    </a>

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $direccion->id }}" href="{{ route('direccions.edit',$direccion->id) }}" id="btn-editinstitucion_{{$direccion->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('direccions.destroy',$direccion->id) }}" id="btn-delete-institucionid_{{$direccion->id}}">
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
            $('#table-data-direccion').DataTable( {
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