@php ($class_N="")
@php ($class_mactividad="")
@php ($class_lapso="")
@php ($class_cantidad="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-afrecuencia">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_mactividad }}">Actividad</th>
            <th scope="col" class="{{ $class_lapso }}">Lapso</th>
            <th scope="col" class="{{ $class_cantidad }}">Cantidad</th>
            {{-- <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th> --}}
            {{-- <th scope="col" class="{{ $class_updated_at }}">Actualizado</th> --}}
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($afrecuencias as $afrecuencia)
        
        <tr data-afrecuencia="{{$afrecuencia->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{-- {{$n++}} --}}
                {{$loop->iteration}}
            </td>

            <td id="td-mactividad-descripcion-{{ $afrecuencia->mactividad->id }}" class="{{ $class_mactividad }}" title="Actividad: {{$afrecuencia->mactividad->descripcion or ''}}">
                <span class="text-mactividad-descripcion-{{ $afrecuencia->mactividad->id }}">
                    {{$afrecuencia->mactividad->truncdescripcion or ''}}
                </span>
            </td>

            <td {{-- style="white-space: nowrap;" --}} id="td-afrecuencia-afrecuencia-{{ $afrecuencia->id }}" class="{{ $class_cantidad }} text-nowrap" title="Lapso: {{ $afrecuencia->lapso or ''}}">
                <span class="text-afrecuencia-lapso-{{ $afrecuencia->id }}">
                    {{$afrecuencia->nomlapso or ''}}
                    {{$afrecuencia->mactividad->unifrecuencia or ''}}
                </span>
            </td>

            <td id="td-afrecuencia-afrecuencia-{{ $afrecuencia->id }}" class="{{ $class_cantidad }}" title="Cantidad: {{ $afrecuencia->cantidad or ''}}">
                <span class="text-afrecuencia-cantidad-{{ $afrecuencia->id }}">
                    {{$afrecuencia->cantidad or ''}}
                </span>
            </td>

            {{-- 
            <td id="td-afrecuencia-created_at-{{ $afrecuencia->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-afrecuencia-created_at-{{$afrecuencia->id}}">
                    {{ (isset($afrecuencia->created_at)) ? Carbon\Carbon::parse($afrecuencia->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproductos-updated_at-{{ $afrecuencia->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-afrecuencia-updated_at-{{$afrecuencia->id}}">
                    {{ (isset($afrecuencia->updated_at)) ? Carbon\Carbon::parse($afrecuencia->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td> 
            --}}

            <td class="{{ $class_action }}" id="btn-action-{{ $afrecuencia->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('afrecuencias.show', $afrecuencia->id) }}">
                        <i class="fas fa-info"></i>
                    </a>                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $afrecuencia->id }}" href="{{ route('afrecuencias.edit',$afrecuencia->id) }}" id="btn-editinstitucion_{{$afrecuencia->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('afrecuencias.destroy',$afrecuencia->id) }}" id="btn-delete-institucionid_{{$afrecuencia->id}}">
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
            $('#table-data-afrecuencia').DataTable( {
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