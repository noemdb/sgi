@php ($class_N="")
@php ($class_mproducto="")
@php ($class_verificador="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-pverificador">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_mproducto }}">Producto</th>
            <th scope="col" class="{{ $class_verificador }}">Verificador</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($pverificadors as $pverificador)
        
        <tr data-pverificador="{{$pverificador->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-pverificador-verificador-{{ $pverificador->id }}" class="{{ $class_mproducto }}" title="POA: {{ $pverificador->mproducto->producto or ''}}">
                <span class="text-mproducto-producto-{{ $pverificador->mproducto->id }}">
                    {{$pverificador->mproducto->truncproducto or ''}}
                </span>
            </td>

            <td id="td-pverificador-pverificador-{{ $pverificador->id }}" class="{{ $class_mproducto }}" title="verificador: {{ $pverificador->verificador or ''}}">
                <span class="text-pverificador-verificador-{{ $pverificador->id }}">
                    {{$pverificador->truncverificador or ''}}
                </span>
            </td>

            <td id="td-pverificador-created_at-{{ $pverificador->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-pverificador-created_at-{{$pverificador->id}}">
                    {{ (isset($pverificador->created_at)) ? Carbon\Carbon::parse($pverificador->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproductos-updated_at-{{ $pverificador->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-pverificador-updated_at-{{$pverificador->id}}">
                    {{ (isset($pverificador->updated_at)) ? Carbon\Carbon::parse($pverificador->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $pverificador->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('pverificadors.showfull', $pverificador->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('pverificadors.show', $pverificador->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $pverificador->id }}" href="{{ route('pverificadors.edit',$pverificador->id) }}" id="btn-editinstitucion_{{$pverificador->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('pverificadors.destroy',$pverificador->id) }}" id="btn-delete-institucionid_{{$pverificador->id}}">
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
            $('#table-data-pverificador').DataTable( {
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