@php ($class_N="")
@php ($class_descripcion="")
@php ($class_periodo="")
@php ($class_area="")
@php ($class_estrategia="d-none d-xl-table-cell")
@php ($class_username="d-none d-xl-table-cell")
@php ($class_created_at="d-none d-md-table-cell")
@php ($class_updated_at="d-none d-lg-table-cell")
@php ($class_action="nosort")

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-poa">
    <thead>
        <tr>
            <th scope="col" class="{{ $class_N }}">N</th>
            <th scope="col" class="{{ $class_descripcion }}">Descripción</th>
            <th scope="col" class="{{ $class_periodo }}">Período</th>
            <th scope="col" class="{{ $class_area }}">Aréa</th>
            <th scope="col" class="{{ $class_estrategia }}">Estratégia</th>
            <th scope="col" class="{{ $class_created_at }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class_updated_at }}">Actualizado</th>
            <th scope="col" class="{{ $class_action }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($poas as $poa)
        
        <tr data-poa="{{$poa->id}}">
            <td scope="row" id="td-count" class="{{ $class_N }}">
                {{$n++}}
            </td>
            <td id="td-poa-descripcion-{{ $poa->id }}" class="{{ $class_descripcion }}" title="Descripción: {{ $poa->descripcion or ''}}">
                <span class="text-poas-descripcion-{{ $poa->id }}">
                    {{$poa->truncdescripcion}}
                </span>
            </td>
            <td id="td-poa-periodo-{{ $poa->id }}" class="{{ $class_periodo }}" title="Período: {{ $poa->periodo or ''}}">
                <span class="text-poas-periodo-{{ $poa->id }}">
                    {{$poa->periodo}}
                </span>
            </td>
            <td id="td-poa-area-{{ $poa->id }}" class="{{ $class_area }}" title="{{ $poa->area or ''}}">
                <span class="text-poas-area-{{ $poa->id }}">
                    {{$poa->area}}
                </span>
            </td>
            <td id="td-poa-estrategia-{{ $poa->id }}" class="{{ $class_estrategia }}" title="Estratégia: {{ $poa->estrategia or ''}}">
                <span class="text-poa-estrategia-{{ $poa->id or ''}}">
                    {{-- {{ $poa->estrategia or ''}} --}}
                    {{ $poa->TruncEstrategia or ''}}
                </span>
            </td>

            <td id="td-poa-created_at-{{ $poa->id or ''}}" class="{{ $class_created_at }}">
                    <span class="text-poa-created_at-{{$poa->id}}">
                        {{ (isset($poa->created_at)) ? Carbon\Carbon::parse($poa->created_at)->format('d-m-Y') : '' }}
                    </span>
                </td>

            <td id="td-poas-updated_at-{{ $poa->id or ''}}" class="{{ $class_updated_at }}">
                <span class="text-poas-updated_at-{{$poa->id}}">
                    {{ (isset($poa->updated_at)) ? Carbon\Carbon::parse($poa->updated_at)->format('d-m-Y') : '' }}
                </span>
            </td>

            <td class="{{ $class_action }}" id="btn-action-{{ $poa->id }}">
                <div class="btn-group btn-group-sm">

                    <a title="Mostrar todos los detalles" class="btn btn-info btn-xs" href="{{ route('poas.showfull', $poa->id) }}">
                        <i class="fas fa-info"></i>
                    </a>

                    {{-- 
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('poas.show', $poa->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                    --}}

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $poa->id }}" href="{{ route('poas.edit',$poa->id) }}" id="btn-editinstitucion_{{$poa->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('poas.destroy',$poa->id) }}" id="btn-delete-institucionid_{{$poa->id}}">
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
            $('#table-data-poa').DataTable( {
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