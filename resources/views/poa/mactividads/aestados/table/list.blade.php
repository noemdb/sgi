@php
    $class = [
        'count'=>'',
        'mactividad'=>'',
        'user'=>'d-none d-md-table-cell',
        'aestado'=>'',
        'created_at'=>'d-none d-lg-table-cell',
        'updated_at'=>'d-none d-lg-table-cell',
        'accion'=>'',
    ]
@endphp

<table width="100%" class="table table-striped table-hover table-sm" id="table-data-aestado">
    <thead>
        <tr>
            <th scope="col" class="{{ $class['count'] }}">N</th>
            <th scope="col" class="{{ $class['mactividad'] }}">Actividad</th>
            <th scope="col" class="{{ $class['user'] }}">Usuario</th>
            <th scope="col" class="{{ $class['aestado'] }}">Estado</th>
            <th scope="col" class="{{ $class['created_at'] }}">&nbsp;&nbsp;Creado&nbsp;&nbsp;</th>
            <th scope="col" class="{{ $class['updated_at'] }}">Actualizado</th> 
            <th scope="col" class="{{ $class['accion'] }}">Aciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @php ($n=1)
    @foreach($aestados as $aestado)
        
        <tr data-aestado="{{$aestado->id}}">

            <td scope="row" id="td-count" class="{{ $class['count'] }}">
                {{$n++}}
            </td>

            <td class="{{ $class['aestado']}}" title="{{ $aestado->mactividad->descripcion or ''}}">
                {{$aestado->mactividad->truncdescripcion or ''}}
            </td>

            <td class="{{ $class['user'] }}" title="{{ $aestado->user->nombre or ''}}">
                {{$aestado->user->username or ''}}
            </td>

            <td class="{{ $class['aestado'] }}" title="{{ $aestado->estado or ''}}">
                {{$aestado->estado or ''}}
            </td>

            <td class="{{ $class['created_at'] }}">
                {{ (isset($aestado->created_at)) ? Carbon\Carbon::parse($aestado->created_at)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['updated_at'] }}">
                {{ (isset($aestado->updated_at)) ? Carbon\Carbon::parse($aestado->updated_at)->format('d-m-Y') : '' }}
            </td>

            <td class="{{ $class['accion'] }}" id="btn-action-{{ $aestado->id }}">
                <div class="btn-group btn-group-sm">
                    
                    <a title="Mostrar detalles" class="btn btn-info btn-xs" href="{{ route('aestados.show', $aestado->id) }}">
                        <i class="fas fa-info"></i>
                    </a> 
                   

                    <a title="Editar resgistro" class="btn btn-warning btn-xs btn-action-group-{{ $aestado->id }}" href="{{ route('aestados.edit',$aestado->id) }}" id="btn-editinstitucion_{{$aestado->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <a title="Eliminar registro" class="btn-delete btn btn-danger btn-xs" href="{{ route('aestados.destroy',$aestado->id) }}" id="btn-delete-institucionid_{{$aestado->id}}">
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
            $('#table-data-aestado').DataTable( {
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