@extends('admin.layouts.dashboard.app')

@section('main')

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10">

        <div class="card card-primary">
            <div class="card-header">
                <h3>
                    Listados de Presupuestaria registrados<br>
                    <small class="text-default">
                        <strong>Total de registros: <span id="presupuestarias_counter">{{$presupuestarias->count()}}</span></strong>
                    </small>
                    
                    {{-- INI Menu rapido --}}
                    <div class="btn-group float-right pt-2">

                        @include('admin.poa.presupuestarias.presupuestarias.menus.index')

                    </div>
                    {{-- FIN Menu rapido --}}
                </h3>
            </div>

            <div class="card-body">

                {{-- Mensaje session-flash sobre operaciones con base de datos --}}
                @include('admin.elements.messeges.oper_ok')             

                {{-- Partial con el listado de los usuarios --}}
                @include('admin.poa.presupuestarias.presupuestarias.table.list')

            </div>
        </div>
    </main>

    {!! Form::open(['route' => ['presupuestarias.destroy',':MPRESUPUESTARIA_ID'], 'method' => 'DELETE', 'id'=>'form-delete', 'role'=>'form']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    @parent

    {{-- INI script ajax json models --}}
    <script src="{{ asset("js/models/poa/presupuestarias/presupuestarias/delete.js") }}"></script>
    {{-- FIN script ajax json models --}}

@endsection