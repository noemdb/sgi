@php
    $class = [
        'count'=>'',
        'direccion'=>'',
        'nombre'=>'',
        'created_at'=>'d-none d-lg-table-cell',
        'updated_at'=>'d-none d-lg-table-cell',
        'accion'=>'',
    ]
@endphp

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-responsable">
    <thead>
        <tr>
            <th scope="col" class="{{ $class['count'] }}">N</th>
            <th scope="col" class="{{ $class['direccion'] }}">Dirección</th>
            <th scope="col" class="{{ $class['nombre'] }}">Nombre</th>
            <th scope="col" class="{{ $class['created_at'] }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class['updated_at'] }}">Actualizado</th> 
            <th scope="col" class="{{ $class['accion'] }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($responsables as $responsable)
        
        <tr data-responsable="{{$responsable->id}}">

            <td scope="row" id="td-count" class="{{ $class['count'] }}">
                {{$n++}}
            </td>

            <td class="{{ $class['direccion']}}" title="{{ $responsable->direccion->descripcion or ''}}">
                {{$responsable->direccion->truncdescripcion or ''}}
            </td>

            <td class="{{ $class['nombre'] }}" title="{{ $responsable->nombre or ''}}">
                {{$responsable->nombre or ''}}
            </td>

            <td class="{{ $class['created_at'] }}">
                {{ (isset($responsable->created_at)) ? Carbon\Carbon::parse($responsable->created_at)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['updated_at'] }}">
                {{ (isset($responsable->updated_at)) ? Carbon\Carbon::parse($responsable->updated_at)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['accion'] }}" id="btn-action-{{ $responsable->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('responsables.show', $responsable->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $responsable->id }}" href="{{ route('responsables.edit',$responsable->id) }}" id="btn-editinstitucion_{{$responsable->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('responsables.destroy',$responsable->id) }}" id="btn-delete-institucionid_{{$responsable->id}}">
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
            $('#table-data-responsable').DataTable( {
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