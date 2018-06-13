@extends('poa.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10">

        <div class="card card-primary">
            <div class="card-header">
                <h3>
                    Listados de Determinantes Registrados<br>
                    <small class="text-default">
                        <strong>Total de registros: <span id="pdeterminantes_counter">{{$pdeterminantes->count()}}</span></strong>
                    </small>

                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right pt-2">

                        @include('poa.mproblemas.pdeterminantes.menus.index')

                    </div>
                    {{-- FIN Menu rapido --}}
                </h3>
            </div>

            <div class="card-body">

                {{-- Mensaje session-flash sobre operaciones con base de datos --}}
                @include('elements.messeges.oper_ok')

                {{-- Partial con el listado de los usuarios --}}
                @include('poa.mproblemas.pdeterminantes.table.list')

            </div>
        </div>
    </main>

    {!! Form::open(['route' => ['pdeterminantes.destroy',':PDETERMINANTE_ID'], 'method' => 'DELETE', 'id'=>'form-delete', 'role'=>'form']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    @parent

    {{-- INI script ajax json models --}}
    <script src="{{ asset("js/models/poa/mproblemas/pdeterminantes/delete.js") }}"></script>
    {{-- FIN script ajax json models --}}

@endsection