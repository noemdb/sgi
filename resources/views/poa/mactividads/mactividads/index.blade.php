@extends('poa.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10">

        <div class="card card-primary">
            <div class="card-header">
                <h3>
                    Listados de Actividades registradas<br>
                    <small class="text-default">
                        <strong>Total de registros: <span id="productos_counter">{{$mactividads->count()}}</span></strong>
                    </small>

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right pt-2">

                        @include('poa.mactividads.mactividads.menus.index')

                    </div>
                    {{-- FIN Menu rapido --}}
                </h3>
            </div>

            <div class="card-body">

                {{-- Mensaje session-flash sobre operaciones con base de datos --}}
                @include('elements.messeges.oper_ok')

                {{-- Partial con el listado de los usuarios --}}
                @include('poa.mactividads.mactividads.table.list')

            </div>
        </div>
        
    </main>

    {!! Form::open(['route' => ['mactividads.destroy',':MACTIVIDAD_ID'], 'method' => 'DELETE', 'id'=>'form-delete', 'role'=>'form']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    @parent

    {{-- INI script ajax json models --}}
    <script src="{{ asset("js/models/poa/mactividads/mactividads/delete.js") }}"></script>
    {{-- FIN script ajax json models --}}

@endsection