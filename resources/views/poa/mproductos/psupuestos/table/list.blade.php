@php ($class_N="")
@php ($class_mproducto="")
@php ($class_supuesto="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-psupuesto">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_mproducto }}">Producto</th>
            <th scope="col" class="{{ $class_supuesto }}">Supuesto</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($psupuestos as $psupuesto)
        
        <tr data-psupuesto="{{$psupuesto->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-psupuesto-supuesto-{{ $psupuesto->id }}" class="{{ $class_mproducto }}" title="POA: {{ $psupuesto->mproducto->producto or ''}}">
                <span class="text-mproducto-producto-{{ $psupuesto->mproducto->id }}">
                    {{$psupuesto->mproducto->truncproducto or ''}}
                </span>
            </td>

            <td id="td-psupuesto-psupuesto-{{ $psupuesto->id }}" class="{{ $class_mproducto }}" title="Supuesto: {{ $psupuesto->supuesto or ''}}">
                <span class="text-psupuesto-supuesto-{{ $psupuesto->id }}">
                    {{$psupuesto->truncsupuesto or ''}}
                </span>
            </td>

            <td id="td-psupuesto-created_at-{{ $psupuesto->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-psupuesto-created_at-{{$psupuesto->id}}">
                    {{ (isset($psupuesto->created_at)) ? Carbon\Carbon::parse($psupuesto->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-mproductos-updated_at-{{ $psupuesto->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-psupuesto-updated_at-{{$psupuesto->id}}">
                    {{ (isset($psupuesto->updated_at)) ? Carbon\Carbon::parse($psupuesto->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $psupuesto->id }}">
                <div class="btn-group btn-group-sm">

                    {{--
                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('psupuestos.showfull', $psupuesto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('psupuestos.show', $psupuesto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $psupuesto->id }}" href="{{ route('psupuestos.edit',$psupuesto->id) }}" id="btn-editinstitucion_{{$psupuesto->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('psupuestos.destroy',$psupuesto->id) }}" id="btn-delete-institucionid_{{$psupuesto->id}}">
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
            $('#table-data-psupuesto').DataTable( {
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