@php ($class_N="")
@php ($class_poa="d-none d-sm-table-cell")
@php ($class_tipo="d-none d-sm-table-cell")
@php ($class_resumen="")
@php ($class_indicadores="d-none d-lg-table-cell")
@php ($class_mverificacion="d-none d-lg-table-cell")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-mlogico">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_poa }}">POA</th>
            <th scope="col" class="{{ $class_tipo }}">Tipo</th>
            <th scope="col" class="{{ $class_resumen }}">Resumen</th>
            <th scope="col" class="{{ $class_indicadores }}">Indicadores</th>
            <th scope="col" class="{{ $class_mverificacion }}" title="Medios de Verificación">M.Verificación</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($mlogicos as $mlogico)
        
        <tr data-mlogico="{{$mlogico->id}}">
            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>
            <td id="td-mlogico-poa-{{ $mlogico->id }}" class="{{ $class_poa }}" title="Descripción POA: {{ $mlogico->poa->descripcion or ''}}">
                <span class="text-mlogicos-poa-{{ $mlogico->id }}">
                    {{$mlogico->poa->truncdescripcion}}
                </span>
            </td>

            <td id="td-mlogico-tipo-{{ $mlogico->id }}" class="{{ $class_tipo }}">
                <span class="text-mlogicos-tipo-{{ $mlogico->id }}">
                    {{$mlogico->tipo}}
                </span>
            </td>

            <td id="td-mlogico-resumen-{{ $mlogico->id }}" class="{{ $class_resumen }}">
                <span class="text-mlogicos-resumen-{{ $mlogico->id }}" title="Resumen: {{ $mlogico->resumen or ''}}">
                    {{$mlogico->truncresumen}}
                </span>
            </td>

            <td id="td-mlogico-indicadores-{{ $mlogico->id }}" class="{{ $class_indicadores }}">
                <span class="text-mlogicos-indicadores-{{ $mlogico->id }}" title="Indicadores: {{ $mlogico->indicadores or ''}}">
                    {{$mlogico->indicadores}}
                </span>
            </td>

            <td id="td-mlogico-mverificacion-{{ $mlogico->id }}" class="{{ $class_mverificacion }}">
                <span class="text-mlogicos-mverificacion-{{ $mlogico->id }}" title="Medios de Verificacion: {{ $mlogico->mverificacion or ''}}">
                    {{$mlogico->mverificacion}}
                </span>
            </td>
 
            <td id="td-mlogico-created_at-{{ $mlogico->id or ''}}" class="{{ $class_created_at }}">
                    <span class="text-mlogico-created_at-{{$mlogico->id}}">
                        {{ (isset($mlogico->created_at)) ? Carbon\Carbon::parse($mlogico->created_at)->format('d-m-Y') : '' }}
                    </span>
                </td>

            <td id="td-mlogicos-updated_at-{{ $mlogico->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-mlogicos-updated_at-{{$mlogico->id}}">
                    {{ (isset($mlogico->updated_at)) ? Carbon\Carbon::parse($mlogico->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $mlogico->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('mlogicos.show',$mlogico->id) }}">
                        <i class="fas fa-info"></i>
                    </a>

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $mlogico->id }}" href="{{ route('mlogicos.edit',$mlogico->id) }}" id="btn-editinstitucion_{{$mlogico->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('mlogicos.destroy',$mlogico->id) }}" id="btn-delete-institucionid_{{$mlogico->id}}">
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
            $('#table-data-mlogico').DataTable( {
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