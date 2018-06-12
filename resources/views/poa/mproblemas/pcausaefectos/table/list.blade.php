@php ($class_N="")
@php ($class_problema="")
@php ($class_causaefecto="")
@php ($class_created_at="d-none d-xl-table-cell")
@php ($class_updated_at="d-none d-xl-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-pcausaefecto">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_problema }}">Problema</th>
            <th scope="col" class="{{ $class_causaefecto }}">Causa/Efecto</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($pcausaefectos as $pcausaefecto)
        
        <tr data-pcausaefecto="{{$pcausaefecto->id}}">

            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>

            <td id="td-pcausaefecto-descripcion-{{ $pcausaefecto->id }}" class="{{ $class_problema }}" title="POA: {{ $pcausaefecto->Mproblema->problema or ''}}">
                <span class="text-Mproblema-problema-{{ $pcausaefecto->Mproblema->id }}">
                    {{$pcausaefecto->Mproblema->truncproblema or ''}}
                </span>
            </td>

            <td id="td-pcausaefecto-causaefecto-{{ $pcausaefecto->id }}" class="{{ $class_causaefecto }}" title="causaefecto: {{ $pcausaefecto->causaefecto or ''}}">
                <span class="text-pcausaefecto-direccion-{{ $pcausaefecto->id }}">
                    {{$pcausaefecto->trunccausaefecto or ''}}
                </span>
            </td>

            <td id="td-pcausaefecto-created_at-{{ $pcausaefecto->id or ''}}" class="{{ $class_created_at }}">
                <span class="text-pcausaefecto-created_at-{{$pcausaefecto->id}}">
                    {{ (isset($pcausaefecto->created_at)) ? Carbon\Carbon::parse($pcausaefecto->created_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td id="td-pcausaefectos-updated_at-{{ $pcausaefecto->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-pcausaefecto-updated_at-{{$pcausaefecto->id}}">
                    {{ (isset($pcausaefecto->updated_at)) ? Carbon\Carbon::parse($pcausaefecto->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $pcausaefecto->id }}">
                <div class="btn-group btn-group-sm">

                    {{-- <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('pcausaefectos.showfull', $pcausaefecto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> --}}

                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('pcausaefectos.show', $pcausaefecto->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $pcausaefecto->id }}" href="{{ route('pcausaefectos.edit',$pcausaefecto->id) }}" id="btn-editinstitucion_{{$pcausaefecto->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('pcausaefectos.destroy',$pcausaefecto->id) }}" id="btn-delete-institucionid_{{$pcausaefecto->id}}">
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
            $('#table-data-pcausaefecto').DataTable( {
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